<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatAvailableReactions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes reactions, available in a chat. Available for basic groups, supergroups, and channels. Requires can_change_info member right.
 */
class SetChatAvailableReactions extends TdFunction
{
    public const string TYPE_NAME = 'setChatAvailableReactions';

    public function __construct(
        /**
         * Reactions available in the chat. All explicitly specified emoji reactions must be active. In channel chats up to the chat's boost level custom emoji reactions can be explicitly specified.
         */
        protected ChatAvailableReactions $availableReactions,
        /**
         * Identifier of the chat.
         */
        protected int                    $chatId,
    ) {}

    public static function fromArray(array $array): SetChatAvailableReactions
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
