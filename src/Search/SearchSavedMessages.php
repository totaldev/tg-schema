<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for messages tagged by the given reaction and with the given words in the Saved Messages chat; for Telegram Premium users only. Returns the results
 * in reverse chronological order, i.e. in order of decreasing message_id. For optimal performance, the number of returned messages is chosen by TDLib and can
 * be smaller than the specified limit.
 */
class SearchSavedMessages extends TdFunction
{
    public const TYPE_NAME = 'searchSavedMessages';

    public function __construct(
        /**
         * If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages.
         */
        protected int          $savedMessagesTopicId,
        /**
         * Tag to search for; pass null to return all suitable messages.
         */
        protected ReactionType $tag,
        /**
         * Query to search for.
         */
        protected string       $query,
        /**
         * Identifier of the message starting from which messages must be fetched; use 0 to get results from the last message.
         */
        protected int          $fromMessageId,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative offset to get the specified message and some newer messages.
         */
        protected int          $offset,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int          $limit,
    ) {}

    public static function fromArray(array $array): SearchSavedMessages
    {
        return new static(
            $array['saved_messages_topic_id'],
            TdSchemaRegistry::fromArray($array['tag']),
            $array['query'],
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function getTag(): ReactionType
    {
        return $this->tag;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
            'tag'                     => $this->tag->typeSerialize(),
            'query'                   => $this->query,
            'from_message_id'         => $this->fromMessageId,
            'offset'                  => $this->offset,
            'limit'                   => $this->limit,
        ];
    }
}
