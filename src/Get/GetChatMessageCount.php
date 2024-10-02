<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Search\SearchMessagesFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns approximate number of messages of the specified type in the chat.
 */
class GetChatMessageCount extends TdFunction
{
    public const TYPE_NAME = 'getChatMessageCount';

    public function __construct(
        /**
         * Identifier of the chat in which to count messages.
         */
        protected int                  $chatId,
        /**
         * Filter for message content; searchMessagesFilterEmpty is unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * If not 0, only messages in the specified Saved Messages topic will be counted; pass 0 to count all messages, or for chats other than Saved Messages.
         */
        protected int                  $savedMessagesTopicId,
        /**
         * Pass true to get the number of messages without sending network requests, or -1 if the number of messages is unknown locally.
         */
        protected bool                 $returnLocal,
    ) {}

    public static function fromArray(array $array): GetChatMessageCount
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['saved_messages_topic_id'],
            $array['return_local'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'filter'                  => $this->filter->typeSerialize(),
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
            'return_local'            => $this->returnLocal,
        ];
    }
}
