<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatAvailableReactions;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat available reactions were changed.
 */
class UpdateChatAvailableReactions extends Update
{
    public const string TYPE_NAME = 'updateChatAvailableReactions';

    public function __construct(
        /**
         * The new reactions, available in the chat.
         */
        protected ChatAvailableReactions $availableReactions,
        /**
         * Chat identifier.
         */
        protected int                    $chatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatAvailableReactions
    {
        return new static(
            availableReactions: TdSchemaRegistry::fromArray($array['available_reactions']),
            chatId            : $array['chat_id'],
        );
    }

    public function getAvailableReactions(): ChatAvailableReactions
    {
        return $this->availableReactions;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setAvailableReactions(ChatAvailableReactions $value): static
    {
        $this->availableReactions = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'available_reactions' => $this->availableReactions->jsonSerialize(),
            'chat_id'             => $this->chatId,
        ];
    }
}
