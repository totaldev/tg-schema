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
 * Returns upgraded gifts that can be bought from other owners using sendResoldGift.
 */
class SearchGiftsForResale extends TdFunction
{
    public const string TYPE_NAME = 'searchGiftsForResale';

    public function __construct(
        /**
         * Attributes used to filter received gifts. If multiple attributes of the same type are specified, then all of them are allowed. If none attributes of specific type are specified, then all values for this attribute type are allowed.
         *
         * @var UpgradedGiftAttributeId[]
         */
        protected array              $attributes,
        /**
         * Identifier of the regular gift that was upgraded to a unique gift.
         */
        protected int                $giftId,
        /**
         * The maximum number of gifts to return.
         */
        protected int                $limit,
        /**
         * Offset of the first entry to return as received from the previous request with the same order and attributes; use empty string to get the first chunk of results.
         */
        protected string             $offset,
        /**
         * Order in which the results will be sorted.
         */
        protected GiftForResaleOrder $order,
    ) {}

    public static function fromArray(array $array): SearchGiftsForResale
    {
        return new static(
            attributes: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['attributes']),
            giftId    : $array['gift_id'],
            limit     : $array['limit'],
            offset    : $array['offset'],
            order     : TdSchemaRegistry::fromArray($array['order']),
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

    public function setAttributes(array $value): static
    {
        $this->attributes = $value;

        return $this;
    }

    public function setGiftId(int $value): static
    {
        $this->giftId = $value;

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

    public function setOrder(GiftForResaleOrder $value): static
    {
        $this->order = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'attributes' => array_map(static fn($x) => $x->jsonSerialize(), $this->attributes),
            'gift_id'    => $this->giftId,
            'limit'      => $this->limit,
            'offset'     => $this->offset,
            'order'      => $this->order->jsonSerialize(),
        ];
    }
}
