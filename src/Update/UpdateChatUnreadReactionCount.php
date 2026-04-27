<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The chat unread_reaction_count has changed.
 */
class UpdateChatUnreadReactionCount extends Update
{
    public const string TYPE_NAME = 'updateChatUnreadReactionCount';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The number of messages with unread reactions left in the chat.
         */
        protected int $unreadReactionCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatUnreadReactionCount
    {
        return new static(
            chatId             : $array['chat_id'],
            unreadReactionCount: $array['unread_reaction_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setUnreadReactionCount(int $value): static
    {
        $this->unreadReactionCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'unread_reaction_count' => $this->unreadReactionCount,
        ];
    }
}
