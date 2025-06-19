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
    public const TYPE_NAME = 'availableGift';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift   $gift,
        /**
         * Number of gifts that are available for resale.
         */
        protected int    $resaleCount,
        /**
         * The minimum price for the gifts available for resale; 0 if there are no such gifts.
         */
        protected int    $minResaleStarCount,
        /**
         * The title of the upgraded gift; empty if the gift isn't available for resale.
         */
        protected string $title
    ) {}

    public static function fromArray(array $array): AvailableGift
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            $array['resale_count'],
            $array['min_resale_star_count'],
            $array['title'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'gift'                  => $this->gift->typeSerialize(),
            'resale_count'          => $this->resaleCount,
            'min_resale_star_count' => $this->minResaleStarCount,
            'title'                 => $this->title,
        ];
    }
}
