<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Search\SearchMessagesFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns sparse positions of messages of the specified type in the chat to be used for shared media scroll implementation. Returns the results in reverse
 * chronological order (i.e., in order of decreasing message_id). Cannot be used in secret chats or with searchMessagesFilterFailedToSend filter without an
 * enabled message database.
 */
class GetChatSparseMessagePositions extends TdFunction
{
    public const TYPE_NAME = 'getChatSparseMessagePositions';

    public function __construct(
        /**
         * Identifier of the chat in which to return information about message positions.
         */
        protected int                  $chatId,
        /**
         * Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * The message identifier from which to return information about message positions.
         */
        protected int                  $fromMessageId,
        /**
         * The expected number of message positions to be returned; 50-2000. A smaller number of positions can be returned, if there are not enough appropriate messages.
         */
        protected int                  $limit,
        /**
         * If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages, or for chats other than Saved Messages.
         */
        protected int                  $savedMessagesTopicId,
    ) {}

    public static function fromArray(array $array): GetChatSparseMessagePositions
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['from_message_id'],
            $array['limit'],
            $array['saved_messages_topic_id'],
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

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
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
            'from_message_id'         => $this->fromMessageId,
            'limit'                   => $this->limit,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}
