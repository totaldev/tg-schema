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
    public const TYPE_NAME = 'updateChatAvailableReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                    $chatId,
        /**
         * The new reactions, available in the chat.
         */
        protected ChatAvailableReactions $availableReactions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatAvailableReactions
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['available_reactions']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'available_reactions' => $this->availableReactions->typeSerialize(),
        ];
    }
}
