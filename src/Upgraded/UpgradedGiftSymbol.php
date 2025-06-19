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
    public const TYPE_NAME = 'upgradedGiftSymbol';

    public function __construct(
        /**
         * Name of the symbol.
         */
        protected string  $name,
        /**
         * The sticker representing the symbol.
         */
        protected Sticker $sticker,
        /**
         * The number of upgraded gifts that receive this symbol for each 1000 gifts upgraded.
         */
        protected int     $rarityPerMille
    ) {}

    public static function fromArray(array $array): UpgradedGiftSymbol
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['rarity_per_mille'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'name'             => $this->name,
            'sticker'          => $this->sticker->typeSerialize(),
            'rarity_per_mille' => $this->rarityPerMille,
        ];
    }
}
