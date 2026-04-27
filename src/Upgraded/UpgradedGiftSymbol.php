<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a symbol shown on the pattern of an upgraded gift.
 */
class UpgradedGiftSymbol extends TdObject
{
    public const string TYPE_NAME = 'upgradedGiftSymbol';

    public function __construct(
        /**
         * Name of the symbol.
         */
        protected string                      $name,
        /**
         * The rarity of the symbol.
         */
        protected UpgradedGiftAttributeRarity $rarity,
        /**
         * The sticker representing the symbol.
         */
        protected Sticker                     $sticker,
    ) {}

    public static function fromArray(array $array): UpgradedGiftSymbol
    {
        return new static(
            name   : $array['name'],
            rarity : TdSchemaRegistry::fromArray($array['rarity']),
            sticker: TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRarity(): UpgradedGiftAttributeRarity
    {
        return $this->rarity;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
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

    public function setSticker(Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'name'    => $this->name,
            'rarity'  => $this->rarity->jsonSerialize(),
            'sticker' => $this->sticker->jsonSerialize(),
        ];
    }
}
