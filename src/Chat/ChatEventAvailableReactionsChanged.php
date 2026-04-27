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
    public const string TYPE_NAME = 'chatEventAvailableReactionsChanged';

    public function __construct(
        /**
         * New chat available reactions.
         */
        protected ChatAvailableReactions $newAvailableReactions,
        /**
         * Previous chat available reactions.
         */
        protected ChatAvailableReactions $oldAvailableReactions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventAvailableReactionsChanged
    {
        return new static(
            newAvailableReactions: TdSchemaRegistry::fromArray($array['new_available_reactions']),
            oldAvailableReactions: TdSchemaRegistry::fromArray($array['old_available_reactions']),
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

    public function setNewAvailableReactions(ChatAvailableReactions $value): static
    {
        $this->newAvailableReactions = $value;

        return $this;
    }

    public function setOldAvailableReactions(ChatAvailableReactions $value): static
    {
        $this->oldAvailableReactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'new_available_reactions' => $this->newAvailableReactions->jsonSerialize(),
            'old_available_reactions' => $this->oldAvailableReactions->jsonSerialize(),
        ];
    }
}
