<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat available reactions were changed.
 */
class ChatEventAvailableReactionsChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventAvailableReactionsChanged';

    public function __construct(
        /**
         * Previous chat available reactions.
         */
        protected ChatAvailableReactions $oldAvailableReactions,
        /**
         * New chat available reactions.
         */
        protected ChatAvailableReactions $newAvailableReactions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventAvailableReactionsChanged
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_available_reactions']),
            TdSchemaRegistry::fromArray($array['new_available_reactions']),
        );
    }

    public function getNewAvailableReactions(): ChatAvailableReactions
    {
        return $this->newAvailableReactions;
    }

    public function getOldAvailableReactions(): ChatAvailableReactions
    {
        return $this->oldAvailableReactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'old_available_reactions' => $this->oldAvailableReactions->typeSerialize(),
            'new_available_reactions' => $this->newAvailableReactions->typeSerialize(),
        ];
    }
}
