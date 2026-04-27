<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a model of an upgraded gift.
 */
class UpgradedGiftModel extends TdObject
{
    public const string TYPE_NAME = 'upgradedGiftModel';

    public function __construct(
        /**
         * True, if the model can be obtained only through gift crafting.
         */
        protected bool                        $isCrafted,
        /**
         * Name of the model.
         */
        protected string                      $name,
        /**
         * The rarity of the model.
         */
        protected UpgradedGiftAttributeRarity $rarity,
        /**
         * The sticker representing the upgraded gift.
         */
        protected Sticker                     $sticker,
    ) {}

    public static function fromArray(array $array): UpgradedGiftModel
    {
        return new static(
            isCrafted: $array['is_crafted'],
            name     : $array['name'],
            rarity   : TdSchemaRegistry::fromArray($array['rarity']),
            sticker  : TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getIsCrafted(): bool
    {
        return $this->isCrafted;
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

    public function setIsCrafted(bool $value): static
    {
        $this->isCrafted = $value;

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

    public function setSticker(Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_crafted' => $this->isCrafted,
            'name'       => $this->name,
            'rarity'     => $this->rarity->jsonSerialize(),
            'sticker'    => $this->sticker->jsonSerialize(),
        ];
    }
}
