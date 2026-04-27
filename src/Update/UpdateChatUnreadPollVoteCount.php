<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The chat unread_poll_vote_count has changed.
 */
class UpdateChatUnreadPollVoteCount extends Update
{
    public const string TYPE_NAME = 'updateChatUnreadPollVoteCount';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The number of messages with unread poll votes left in the chat.
         */
        protected int $unreadPollVoteCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatUnreadPollVoteCount
    {
        return new static(
            chatId             : $array['chat_id'],
            unreadPollVoteCount: $array['unread_poll_vote_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUnreadPollVoteCount(): int
    {
        return $this->unreadPollVoteCount;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setUnreadPollVoteCount(int $value): static
    {
        $this->unreadPollVoteCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'unread_poll_vote_count' => $this->unreadPollVoteCount,
        ];
    }
}
