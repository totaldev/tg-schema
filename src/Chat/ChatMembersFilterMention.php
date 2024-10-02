<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * Returns users which can be mentioned in the chat.
 */
class ChatMembersFilterMention extends ChatMembersFilter
{
    public const TYPE_NAME = 'chatMembersFilterMention';

    public function __construct(
        /**
         * If non-zero, the identifier of the current message thread.
         */
        protected int $messageThreadId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMembersFilterMention
    {
        return new static(
            $array['message_thread_id'],
        );
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'message_thread_id' => $this->messageThreadId,
        ];
    }
}
