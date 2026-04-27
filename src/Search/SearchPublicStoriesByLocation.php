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
    public const string TYPE_NAME = 'searchPublicStoriesByLocation';

    public function __construct(
        /**
         * Address of the location.
         */
        protected LocationAddress $address,
        /**
         * The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int             $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string          $offset,
    ) {}

    public static function fromArray(array $array): SearchPublicStoriesByLocation
    {
        return new static(
            address: TdSchemaRegistry::fromArray($array['address']),
            limit  : $array['limit'],
            offset : $array['offset'],
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

    public function setAddress(LocationAddress $value): static
    {
        $this->address = $value;

        return $this;
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'address' => $this->address->jsonSerialize(),
            'limit'   => $this->limit,
            'offset'  => $this->offset,
        ];
    }
}
