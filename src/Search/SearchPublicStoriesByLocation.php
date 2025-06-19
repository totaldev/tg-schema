<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Location\LocationAddress;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for public stories by the given address location. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller
 * than the specified limit.
 */
class SearchPublicStoriesByLocation extends TdFunction
{
    public const TYPE_NAME = 'searchPublicStoriesByLocation';

    public function __construct(
        /**
         * Address of the location.
         */
        protected LocationAddress $address,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string          $offset,
        /**
         * The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int             $limit
    ) {}

    public static function fromArray(array $array): SearchPublicStoriesByLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['address']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getAddress(): LocationAddress
    {
        return $this->address;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'address' => $this->address->typeSerialize(),
            'offset'  => $this->offset,
            'limit'   => $this->limit,
        ];
    }
}
