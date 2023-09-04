<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for call messages. Returns the results in reverse chronological order (i.e., in order of decreasing message_id). For optimal performance, the number of returned messages is chosen by TDLib
 */
class SearchCallMessages extends TdFunction
{
    public const TYPE_NAME = 'searchCallMessages';

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    /**
     * Pass true to search only for messages with missed/declined calls
     *
     * @var bool
     */
    protected bool $onlyMissed;

    public function __construct(string $offset, int $limit, bool $onlyMissed)
    {
        $this->offset = $offset;
        $this->limit = $limit;
        $this->onlyMissed = $onlyMissed;
    }

    public static function fromArray(array $array): SearchCallMessages
    {
        return new static(
            $array['offset'],
            $array['limit'],
            $array['only_missed'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'only_missed' => $this->onlyMissed,
        ];
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOnlyMissed(): bool
    {
        return $this->onlyMissed;
    }
}
