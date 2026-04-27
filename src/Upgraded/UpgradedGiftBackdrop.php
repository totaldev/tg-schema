<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a backdrop of an upgraded gift.
 */
class UpgradedGiftBackdrop extends TdObject
{
    public const string TYPE_NAME = 'upgradedGiftBackdrop';

    public function __construct(
        /**
         * Colors of the backdrop.
         */
        protected UpgradedGiftBackdropColors  $colors,
        /**
         * Unique identifier of the backdrop.
         */
        protected int                         $id,
        /**
         * Name of the backdrop.
         */
        protected string                      $name,
        /**
         * The rarity of the backdrop.
         */
        protected UpgradedGiftAttributeRarity $rarity,
    ) {}

    public static function fromArray(array $array): UpgradedGiftBackdrop
    {
        return new static(
            colors: TdSchemaRegistry::fromArray($array['colors']),
            id    : $array['id'],
            name  : $array['name'],
            rarity: TdSchemaRegistry::fromArray($array['rarity']),
        );
    }

    public function getColors(): UpgradedGiftBackdropColors
    {
        return $this->colors;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRarity(): UpgradedGiftAttributeRarity
    {
        return $this->rarity;
    }

    public function setColors(UpgradedGiftBackdropColors $value): static
    {
        $this->colors = $value;

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

    public function setRarity(UpgradedGiftAttributeRarity $value): static
    {
        $this->rarity = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'colors' => $this->colors->jsonSerialize(),
            'id'     => $this->id,
            'name'   => $this->name,
            'rarity' => $this->rarity->jsonSerialize(),
        ];
    }
}
