<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Hide;

use Totaldev\TgSchema\Suggested\SuggestedAction;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Hides a suggested action.
 */
class HideSuggestedAction extends TdFunction
{
    public const string TYPE_NAME = 'hideSuggestedAction';

    public function __construct(
        /**
         * Suggested action to hide.
         */
        protected SuggestedAction $action
    ) {}

    public static function fromArray(array $array): HideSuggestedAction
    {
        return new static(
            action: TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function getAction(): SuggestedAction
    {
        return $this->action;
    }

    public function setAction(SuggestedAction $value): static
    {
        $this->action = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'action' => $this->action->jsonSerialize(),
        ];
    }
}
