<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\TdFunction;

/**
 * Loads more topics in a channel direct messages chat administered by the current user. The loaded topics will be sent through updateDirectMessagesChatTopic.
 * Topics are sorted by their topic.order in descending order. Returns a 404 error if all topics have been loaded.
 */
class LoadDirectMessagesChatTopics extends TdFunction
{
    public const TYPE_NAME = 'loadDirectMessagesChatTopics';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * The maximum number of topics to be loaded. For optimal performance, the number of loaded topics is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): LoadDirectMessagesChatTopics
    {
        return new static(
            $array['chat_id'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'limit'   => $this->limit,
        ];
    }
}
