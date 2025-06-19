<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the order of pinned forum topics; requires can_manage_topics right in the supergroup.
 */
class SetPinnedForumTopics extends TdFunction
{
    public const TYPE_NAME = 'setPinnedForumTopics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * The new list of pinned forum topics.
         *
         * @var int[]
         */
        protected array $messageThreadIds
    ) {}

    public static function fromArray(array $array): SetPinnedForumTopics
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadIds(): array
    {
        return $this->messageThreadIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'chat_id'            => $this->chatId,
            'message_thread_ids' => $this->messageThreadIds,
        ];
    }
}
