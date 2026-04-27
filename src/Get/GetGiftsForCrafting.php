<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns upgraded gifts of the current user who can be used to craft another gifts.
 */
class GetGiftsForCrafting extends TdFunction
{
    public const string TYPE_NAME = 'getGiftsForCrafting';

    public function __construct(
        /**
         * The maximum number of gifts to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Identifier of the regular gift that will be used for crafting.
         */
        protected int    $regularGiftId,
    ) {}

    public static function fromArray(array $array): GetGiftsForCrafting
    {
        return new static(
            limit        : $array['limit'],
            offset       : $array['offset'],
            regularGiftId: $array['regular_gift_id'],
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

    public function getRegularGiftId(): int
    {
        return $this->regularGiftId;
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

    public function setRegularGiftId(int $value): static
    {
        $this->regularGiftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'limit'           => $this->limit,
            'offset'          => $this->offset,
            'regular_gift_id' => $this->regularGiftId,
        ];
    }
}
