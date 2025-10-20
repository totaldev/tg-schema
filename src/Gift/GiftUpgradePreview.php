<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftBackdrop;
use Totaldev\TgSchema\Upgraded\UpgradedGiftModel;
use Totaldev\TgSchema\Upgraded\UpgradedGiftSymbol;

/**
 * Contains examples of possible upgraded gifts for the given regular gift.
 */
class GiftUpgradePreview extends TdObject
{
    public const TYPE_NAME = 'giftUpgradePreview';

    public function __construct(
        /**
         * Examples of possible models that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftModel[]
         */
        protected array $models,
        /**
         * Examples of possible symbols that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftSymbol[]
         */
        protected array $symbols,
        /**
         * Examples of possible backdrops that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftBackdrop[]
         */
        protected array $backdrops,
        /**
         * Examples of price for gift upgrade from the maximum price to the minimum price.
         *
         * @var GiftUpgradePrice[]
         */
        protected array $prices,
        /**
         * Next changes for the price for gift upgrade with more granularity than in prices.
         *
         * @var GiftUpgradePrice[]
         */
        protected array $nextPrices,
    ) {}

    public static function fromArray(array $array): GiftUpgradePreview
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['models']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['symbols']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backdrops']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['prices']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['next_prices']),
        );
    }

    public function getBackdrops(): array
    {
        return $this->backdrops;
    }

    public function getModels(): array
    {
        return $this->models;
    }

    public function getNextPrices(): array
    {
        return $this->nextPrices;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function getSymbols(): array
    {
        return $this->symbols;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'models'      => array_map(static fn($x) => $x->typeSerialize(), $this->models),
            'symbols'     => array_map(static fn($x) => $x->typeSerialize(), $this->symbols),
            'backdrops'   => array_map(static fn($x) => $x->typeSerialize(), $this->backdrops),
            'prices'      => array_map(static fn($x) => $x->typeSerialize(), $this->prices),
            'next_prices' => array_map(static fn($x) => $x->typeSerialize(), $this->nextPrices),
        ];
    }
}
