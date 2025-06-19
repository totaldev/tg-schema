<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The chat unread_mention_count has changed.
 */
class UpdateChatUnreadMentionCount extends Update
{
    public const TYPE_NAME = 'updateChatUnreadMentionCount';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The number of unread mention messages left in the chat.
         */
        protected int $unreadMentionCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatUnreadMentionCount
    {
        return new static(
            $array['chat_id'],
            $array['unread_mention_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'unread_mention_count' => $this->unreadMentionCount,
        ];
    }
}
