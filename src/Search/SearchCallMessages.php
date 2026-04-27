<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for call and group call messages. Returns the results in reverse chronological order (i.e., in order of decreasing message_id). For optimal
 * performance, the number of returned messages is chosen by TDLib.
 */
class SearchCallMessages extends TdFunction
{
    public const string TYPE_NAME = 'searchCallMessages';

    public function __construct(
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Pass true to search only for messages with missed/declined calls.
         */
        protected bool   $onlyMissed,
    ) {}

    public static function fromArray(array $array): SearchCallMessages
    {
        return new static(
            limit     : $array['limit'],
            offset    : $array['offset'],
            onlyMissed: $array['only_missed'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOnlyMissed(): bool
    {
        return $this->onlyMissed;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOnlyMissed(bool $value): static
    {
        $this->onlyMissed = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'limit'       => $this->limit,
            'offset'      => $this->offset,
            'only_missed' => $this->onlyMissed,
        ];
    }
}
