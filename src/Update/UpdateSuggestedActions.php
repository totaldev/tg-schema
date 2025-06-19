<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Suggested\SuggestedAction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of suggested to the user actions has changed.
 */
class UpdateSuggestedActions extends Update
{
    public const TYPE_NAME = 'updateSuggestedActions';

    public function __construct(
        /**
         * Added suggested actions.
         *
         * @var SuggestedAction[]
         */
        protected array $addedActions,
        /**
         * Removed suggested actions.
         *
         * @var SuggestedAction[]
         */
        protected array $removedActions
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSuggestedActions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['added_actions']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['removed_actions']),
        );
    }

    public function getAddedActions(): array
    {
        return $this->addedActions;
    }

    public function getRemovedActions(): array
    {
        return $this->removedActions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->addedActions),
            array_map(fn($x) => $x->typeSerialize(), $this->removedActions),
        ];
    }
}
