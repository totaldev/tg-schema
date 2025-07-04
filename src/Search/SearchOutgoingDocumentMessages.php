<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for outgoing messages with content of the type messageDocument in all chats except secret chats. Returns the results in reverse chronological order.
 */
class SearchOutgoingDocumentMessages extends TdFunction
{
    public const TYPE_NAME = 'searchOutgoingDocumentMessages';

    public function __construct(
        /**
         * Query to search for in document file name and message caption.
         */
        protected string $query,
        /**
         * The maximum number of messages to be returned; up to 100.
         */
        protected int    $limit
    ) {}

    public static function fromArray(array $array): SearchOutgoingDocumentMessages
    {
        return new static(
            $array['query'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'limit' => $this->limit,
        ];
    }
}
