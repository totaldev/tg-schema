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
        protected string  $name,
        /**
         * The number of upgraded gifts that receive this symbol for each 1000 gifts upgraded.
         */
        protected int     $rarityPerMille,
        /**
         * The sticker representing the symbol.
         */
        protected Sticker $sticker,
    ) {}

    public static function fromArray(array $array): UpgradedGiftSymbol
    {
        return new static(
            name          : $array['name'],
            rarityPerMille: $array['rarity_per_mille'],
            sticker       : TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
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

    public function setRarityPerMille(int $value): static
    {
        $this->rarityPerMille = $value;

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
            '@type'            => static::TYPE_NAME,
            'name'             => $this->name,
            'rarity_per_mille' => $this->rarityPerMille,
            'sticker'          => $this->sticker->jsonSerialize(),
        ];
    }
}
