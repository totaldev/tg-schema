<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes collection of gifts.
 */
class GiftCollection extends TdObject
{
    public const TYPE_NAME = 'giftCollection';

    public function __construct(
        /**
         * Unique identifier of the collection.
         */
        protected int      $id,
        /**
         * Name of the collection.
         */
        protected string   $name,
        /**
         * Icon of the collection; may be null if none.
         */
        protected ?Sticker $icon,
        /**
         * Total number of gifts in the collection.
         */
        protected int      $giftCount,
    ) {}

    public static function fromArray(array $array): GiftCollection
    {
        return new static(
            $array['id'],
            $array['name'],
            isset($array['icon']) ? TdSchemaRegistry::fromArray($array['icon']) : null,
            $array['gift_count'],
        );
    }

    public function getGiftCount(): int
    {
        return $this->giftCount;
    }

    public function getIcon(): ?Sticker
    {
        return $this->icon;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'id'         => $this->id,
            'name'       => $this->name,
            'icon'       => $this->icon ?? null,
            'gift_count' => $this->giftCount,
        ];
    }
}
