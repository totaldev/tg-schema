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
    public const string TYPE_NAME = 'giftCollection';

    public function __construct(
        /**
         * Total number of gifts in the collection.
         */
        protected int      $giftCount,
        /**
         * Icon of the collection; may be null if none.
         */
        protected ?Sticker $icon,
        /**
         * Unique identifier of the collection.
         */
        protected int      $id,
        /**
         * Name of the collection.
         */
        protected string   $name,
    ) {}

    public static function fromArray(array $array): GiftCollection
    {
        return new static(
            giftCount: $array['gift_count'],
            icon     : (isset($array['icon']) ? TdSchemaRegistry::fromArray($array['icon']) : null),
            id       : $array['id'],
            name     : $array['name'],
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

    public function setGiftCount(int $value): static
    {
        $this->giftCount = $value;

        return $this;
    }

    public function setIcon(?Sticker $value): static
    {
        $this->icon = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'gift_count' => $this->giftCount,
            'icon'       => (null !== $this->icon ? $this->icon->jsonSerialize() : null),
            'id'         => $this->id,
            'name'       => $this->name,
        ];
    }
}
