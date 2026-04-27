<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Available;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a gift that is available for purchase.
 */
class AvailableGift extends TdObject
{
    public const string TYPE_NAME = 'availableGift';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift   $gift,
        /**
         * The minimum price for the gifts available for resale in Telegram Star equivalent; 0 if there are no such gifts.
         */
        protected int    $minResaleStarCount,
        /**
         * Number of gifts that are available for resale.
         */
        protected int    $resaleCount,
        /**
         * The title of the upgraded gift; empty if the gift isn't available for resale.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): AvailableGift
    {
        return new static(
            gift              : TdSchemaRegistry::fromArray($array['gift']),
            minResaleStarCount: $array['min_resale_star_count'],
            resaleCount       : $array['resale_count'],
            title             : $array['title'],
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function getMinResaleStarCount(): int
    {
        return $this->minResaleStarCount;
    }

    public function getResaleCount(): int
    {
        return $this->resaleCount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setMinResaleStarCount(int $value): static
    {
        $this->minResaleStarCount = $value;

        return $this;
    }

    public function setResaleCount(int $value): static
    {
        $this->resaleCount = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'gift'                  => $this->gift->jsonSerialize(),
            'min_resale_star_count' => $this->minResaleStarCount,
            'resale_count'          => $this->resaleCount,
            'title'                 => $this->title,
        ];
    }
}
