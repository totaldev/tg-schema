<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for outgoing messages with content of the type messageDocument in all chats except secret chats. Returns the results in reverse chronological order
 */
class SearchOutgoingDocumentMessages extends TdFunction
{
    public const TYPE_NAME = 'searchOutgoingDocumentMessages';

    /**
     * Query to search for in document file name and message caption
     *
     * @var string
     */
    protected string $query;

    /**
     * The maximum number of messages to be returned; up to 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(string $query, int $limit)
    {
        $this->query = $query;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchOutgoingDocumentMessages
    {
        return new static(
            $array['query'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'limit' => $this->limit,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
