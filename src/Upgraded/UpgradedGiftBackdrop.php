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
    public const TYPE_NAME = 'upgradedGiftBackdrop';

    public function __construct(
        /**
         * Unique identifier of the backdrop.
         */
        protected int                        $id,
        /**
         * Name of the backdrop.
         */
        protected string                     $name,
        /**
         * Colors of the backdrop.
         */
        protected UpgradedGiftBackdropColors $colors,
        /**
         * The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded.
         */
        protected int                        $rarityPerMille
    ) {}

    public static function fromArray(array $array): UpgradedGiftBackdrop
    {
        return new static(
            $array['id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['colors']),
            $array['rarity_per_mille'],
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

    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'id'               => $this->id,
            'name'             => $this->name,
            'colors'           => $this->colors->typeSerialize(),
            'rarity_per_mille' => $this->rarityPerMille,
        ];
    }
}
