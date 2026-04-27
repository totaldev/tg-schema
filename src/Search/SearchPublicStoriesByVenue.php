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
    public const string TYPE_NAME = 'searchPublicStoriesByVenue';

    public function __construct(
        /**
         * The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Identifier of the venue in the provider database.
         */
        protected string $venueId,
        /**
         * Provider of the venue.
         */
        protected string $venueProvider,
    ) {}

    public static function fromArray(array $array): SearchPublicStoriesByVenue
    {
        return new static(
            limit        : $array['limit'],
            offset       : $array['offset'],
            venueId      : $array['venue_id'],
            venueProvider: $array['venue_provider'],
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

    public function setVenueId(string $value): static
    {
        $this->venueId = $value;

        return $this;
    }

    public function setVenueProvider(string $value): static
    {
        $this->venueProvider = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'limit'          => $this->limit,
            'offset'         => $this->offset,
            'venue_id'       => $this->venueId,
            'venue_provider' => $this->venueProvider,
        ];
    }
}
