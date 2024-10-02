<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for public stories from the given venue. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the
 * specified limit.
 */
class SearchPublicStoriesByVenue extends TdFunction
{
    public const TYPE_NAME = 'searchPublicStoriesByVenue';

    public function __construct(
        /**
         * Provider of the venue.
         */
        protected string $venueProvider,
        /**
         * Identifier of the venue in the provider database.
         */
        protected string $venueId,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): SearchPublicStoriesByVenue
    {
        return new static(
            $array['venue_provider'],
            $array['venue_id'],
            $array['offset'],
            $array['limit'],
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

    public function getVenueId(): string
    {
        return $this->venueId;
    }

    public function getVenueProvider(): string
    {
        return $this->venueProvider;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'venue_provider' => $this->venueProvider,
            'venue_id'       => $this->venueId,
            'offset'         => $this->offset,
            'limit'          => $this->limit,
        ];
    }
}
