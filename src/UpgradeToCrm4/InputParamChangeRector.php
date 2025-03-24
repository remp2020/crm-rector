<?php
declare(strict_types=1);

namespace Crm\Utils\Rector\UpgradeToCrm4;

use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Scalar\String_;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

/**
 * Copied from eFabrica Team & slightly changed for internal needs.
 * See https://github.com/efabrica-team/rector-tomaj-nette-api/tree/8d0c802e64a26bc2db67c158ffe8376642de34a4/tests/Rules/InputParamChangeRector
 */
class InputParamChangeRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Changes InputParam to specific InputParam type', [
            new CodeSample(
                badCode: '
                public function params()
                {
                    return [
                        new \Crm\ApiModule\Models\Params\InputParam(\Crm\ApiModule\Models\Params\InputParam::TYPE_GET, "get_param", \Crm\ApiModule\Models\Params\InputParam::OPTIONAL, null, true),
                        new \Crm\ApiModule\Models\Params\InputParam(\Crm\ApiModule\Models\Params\InputParam::TYPE_POST, "post_param", \Crm\ApiModule\Models\Params\InputParam::REQUIRED),
                        new \Crm\ApiModule\Models\Params\InputParam(\Crm\ApiModule\Models\Params\InputParam::TYPE_GET, "types", \Crm\ApiModule\Models\Params\InputParam::REQUIRED, ["type1" => "Type 1", "type2" => "Type 2"]),
                    ];
                }',
                goodCode: 'public function params()
                {
                    return [
                        (new \Tomaj\NetteApi\Params\GetInputParam("get_param"))->setMulti(),
                        (new \Tomaj\NetteApi\Params\PostInputParam("post_param"))->setRequired(),
                        (new \Tomaj\NetteApi\Params\GetInputParam("types"))->setRequired()->setAvailableValues(["type1" => "Type 1", "type2" => "Type 2"]),
                    ];
                }'
            )
        ]);
    }

    public function getNodeTypes(): array
    {
        return [New_::class];
    }

    public function refactor(Node $node): ?Node
    {
        if ($this->getName($node->class) !== 'Crm\ApiModule\Models\Params\InputParam') {
            return null;
        }

        $typeNode = $node->getArgs()[0]->value ?? null;
        if (!$typeNode) {
            return null;
        }

        $newClassName = null;
        if ($typeNode instanceof ClassConstFetch) {
            $name = $this->getName($typeNode);
            if ($name === 'Crm\ApiModule\Models\Params\InputParam::TYPE_GET') {
                $newClassName = 'Tomaj\NetteApi\Params\GetInputParam';
            } elseif ($name === 'Crm\ApiModule\Models\Params\InputParam::TYPE_POST') {
                $newClassName = 'Tomaj\NetteApi\Params\PostInputParam';
            } elseif ($name === 'Crm\ApiModule\Models\Params\InputParam::TYPE_PUT') {
                $newClassName = 'Tomaj\NetteApi\Params\PutInputParam';
            } elseif ($name === 'Crm\ApiModule\Models\Params\InputParam::TYPE_FILE') {
                $newClassName = 'Tomaj\NetteApi\Params\FileInputParam';
            } elseif ($name === 'Crm\ApiModule\Models\Params\InputParam::TYPE_COOKIE') {
                $newClassName = 'Tomaj\NetteApi\Params\CookieInputParam';
            } elseif ($name === 'Crm\ApiModule\Models\Params\InputParam::TYPE_POST_RAW') {
                $newClassName = 'Tomaj\NetteApi\Params\RawInputParam';
            }
        } elseif ($typeNode instanceof String_) {
            $value = $typeNode->value;
            if ($value === 'GET') {
                $newClassName = 'Tomaj\NetteApi\Params\GetInputParam';
            } elseif ($value === 'POST') {
                $newClassName = 'Tomaj\NetteApi\Params\PostInputParam';
            } elseif ($value === 'PUT') {
                $newClassName = 'Tomaj\NetteApi\Params\PutInputParam';
            } elseif ($value === 'FILE') {
                $newClassName = 'Tomaj\NetteApi\Params\FileInputParam';
            } elseif ($value === 'COOKIE') {
                $newClassName = 'Tomaj\NetteApi\Params\CookieInputParam';
            } elseif ($value === 'TYPE_POST_RAW') {
                $newClassName = 'Tomaj\NetteApi\Params\RawInputParam';
            }
        }

        if (!$newClassName) {
            return null;
        }

        $nameNode = $node->getArgs()[1]->value ?? null;
        if (!$nameNode) {
            return null;
        }

        $outputNode = new New_(new FullyQualified($newClassName), [new Arg($nameNode)]);

        // transform required
        $isRequired = false;
        $isRequiredNode = $node->getArgs()[2]->value ?? null;
        if ($isRequiredNode instanceof ClassConstFetch) {
            $name = $this->getName($isRequiredNode);
            if ($name === 'Crm\ApiModule\Models\Params\InputParam::REQUIRED') {
                $isRequired = true;
            }
        } elseif ($isRequiredNode instanceof ConstFetch) {
            $value = $this->getName($isRequiredNode);
            if ($value === 'true') {
                $isRequired = true;
            }
        }
        if ($isRequired) {
            $outputNode = new MethodCall($outputNode, 'setRequired');
        }

        // transform available values
        $availableValuesNode = $node->getArgs()[3] ?? null;
        if ($availableValuesNode && $availableValuesNode->value instanceof ConstFetch) {
            $availableValuesNodeValue = $this->getName($availableValuesNode->value);
            if ($availableValuesNodeValue === 'null') {
                $availableValuesNode = null;
            }
        }
        if ($availableValuesNode) {
            $outputNode = new MethodCall($outputNode, 'setAvailableValues', [$availableValuesNode]);
        }

        // transform is multi
        $isMulti = false;
        $isMultiNode = $node->getArgs()[4]->value ?? null;
        if ($isMultiNode instanceof ConstFetch) {
            $value = $this->getName($isMultiNode);
            if ($value === 'true') {
                $isMulti = true;
            }
        }
        if ($isMulti) {
            $outputNode = new MethodCall($outputNode, 'setMulti');
        }

        return $outputNode;
    }
}
