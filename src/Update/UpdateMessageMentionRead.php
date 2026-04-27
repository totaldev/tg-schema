<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A message with an unread mention was read.
 */
class UpdateMessageMentionRead extends Update
{
    public const string TYPE_NAME = 'updateMessageMentionRead';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Message identifier.
         */
        protected int $messageId,
        /**
         * The new number of unread mention messages left in the chat.
         */
        protected int $unreadMentionCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageMentionRead
    {
        return new static(
            chatId            : $array['chat_id'],
            messageId         : $array['message_id'],
            unreadMentionCount: $array['unread_mention_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setUnreadMentionCount(int $value): static
    {
        $this->unreadMentionCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'message_id'           => $this->messageId,
            'unread_mention_count' => $this->unreadMentionCount,
        ];
    }
}
