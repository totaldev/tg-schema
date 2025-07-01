<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Gift\GiftForResaleOrder;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftAttributeId;

/**
 * Returns upgraded gifts that can be bought from other owners.
 */
class SearchGiftsForResale extends TdFunction
{
    public const TYPE_NAME = 'searchGiftsForResale';

    public function __construct(
        /**
         * Identifier of the regular gift that was upgraded to a unique gift.
         */
        protected int                $giftId,
        /**
         * Order in which the results will be sorted.
         */
        protected GiftForResaleOrder $order,
        /**
         * Attributes used to filter received gifts. If multiple attributes of the same type are specified, then all of them are allowed. If none attributes of specific type are specified, then all values for this attribute type are allowed.
         *
         * @var UpgradedGiftAttributeId[]
         */
        protected array              $attributes,
        /**
         * Offset of the first entry to return as received from the previous request with the same order and attributes; use empty string to get the first chunk of results.
         */
        protected string             $offset,
        /**
         * The maximum number of gifts to return.
         */
        protected int                $limit
    ) {}

    public static function fromArray(array $array): SearchGiftsForResale
    {
        return new static(
            $array['gift_id'],
            TdSchemaRegistry::fromArray($array['order']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['attributes']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOrder(): GiftForResaleOrder
    {
        return $this->order;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'gift_id'    => $this->giftId,
            'order'      => $this->order->typeSerialize(),
            'attributes' => array_map(static fn($x) => $x->typeSerialize(), $this->attributes),
            'offset'     => $this->offset,
            'limit'      => $this->limit,
        ];
    }
}
