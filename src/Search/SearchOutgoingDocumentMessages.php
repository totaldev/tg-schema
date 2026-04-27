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
    public const string TYPE_NAME = 'searchOutgoingDocumentMessages';

    public function __construct(
        /**
         * The maximum number of messages to be returned; up to 100.
         */
        protected int    $limit,
        /**
         * Query to search for in document file name and message caption.
         */
        protected string $query,
    ) {}

    public static function fromArray(array $array): SearchOutgoingDocumentMessages
    {
        return new static(
            limit: $array['limit'],
            query: $array['query'],
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
            'query' => $this->query,
        ];
    }
}
