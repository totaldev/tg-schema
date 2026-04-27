<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The rarity is represented as the numeric frequency of the model.
 */
class UpgradedGiftAttributeRarityPerMille extends UpgradedGiftAttributeRarity
{
    public const string TYPE_NAME = 'upgradedGiftAttributeRarityPerMille';

    public function __construct(
        /**
         * The number of upgraded gifts that receive this attribute for each 1000 gifts upgraded; if 0, then it can be shown as "<0.1%".
         */
        protected int $perMille
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeRarityPerMille
    {
        return new static(
            perMille: $array['per_mille'],
        );
    }

    public function getPerMille(): int
    {
        return $this->perMille;
    }

    public function setPerMille(int $value): static
    {
        $this->perMille = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'per_mille' => $this->perMille,
        ];
    }
}
