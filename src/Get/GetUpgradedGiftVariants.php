<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns all possible variants of upgraded gifts for a regular gift.
 */
class GetUpgradedGiftVariants extends TdFunction
{
    public const string TYPE_NAME = 'getUpgradedGiftVariants';

    public function __construct(
        /**
         * Identifier of the regular gift.
         */
        protected int  $regularGiftId,
        /**
         * Pass true to get models that can be obtained by crafting a gift from upgraded gifts.
         */
        protected bool $returnCraftModels,
        /**
         * Pass true to get models that can be obtained by upgrading a regular gift.
         */
        protected bool $returnUpgradeModels,
    ) {}

    public static function fromArray(array $array): GetUpgradedGiftVariants
    {
        return new static(
            regularGiftId      : $array['regular_gift_id'],
            returnCraftModels  : $array['return_craft_models'],
            returnUpgradeModels: $array['return_upgrade_models'],
        );
    }

    public function getRegularGiftId(): int
    {
        return $this->regularGiftId;
    }

    public function getReturnCraftModels(): bool
    {
        return $this->returnCraftModels;
    }

    public function getReturnUpgradeModels(): bool
    {
        return $this->returnUpgradeModels;
    }

    public function setRegularGiftId(int $value): static
    {
        $this->regularGiftId = $value;

        return $this;
    }

    public function setReturnCraftModels(bool $value): static
    {
        $this->returnCraftModels = $value;

        return $this;
    }

    public function setReturnUpgradeModels(bool $value): static
    {
        $this->returnUpgradeModels = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'regular_gift_id'       => $this->regularGiftId,
            'return_craft_models'   => $this->returnCraftModels,
            'return_upgrade_models' => $this->returnUpgradeModels,
        ];
    }
}
