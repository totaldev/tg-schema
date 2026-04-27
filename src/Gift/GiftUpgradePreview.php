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
    public const string TYPE_NAME = 'giftUpgradePreview';

    public function __construct(
        /**
         * Examples of possible backdrops that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftBackdrop[]
         */
        protected array $backdrops,
        /**
         * Examples of possible models that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftModel[]
         */
        protected array $models,
        /**
         * Next changes for the price for gift upgrade with more granularity than in prices.
         *
         * @var GiftUpgradePrice[]
         */
        protected array $nextPrices,
        /**
         * Examples of price for gift upgrade from the maximum price to the minimum price.
         *
         * @var GiftUpgradePrice[]
         */
        protected array $prices,
        /**
         * Examples of possible symbols that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftSymbol[]
         */
        protected array $symbols,
    ) {}

    public static function fromArray(array $array): GiftUpgradePreview
    {
        return new static(
            backdrops : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backdrops']),
            models    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['models']),
            nextPrices: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['next_prices']),
            prices    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['prices']),
            symbols   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['symbols']),
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

    public function setBackdrops(array $value): static
    {
        $this->backdrops = $value;

        return $this;
    }

    public function setModels(array $value): static
    {
        $this->models = $value;

        return $this;
    }

    public function setNextPrices(array $value): static
    {
        $this->nextPrices = $value;

        return $this;
    }

    public function setPrices(array $value): static
    {
        $this->prices = $value;

        return $this;
    }

    public function setSymbols(array $value): static
    {
        $this->symbols = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'backdrops'   => array_map(static fn($x) => $x->jsonSerialize(), $this->backdrops),
            'models'      => array_map(static fn($x) => $x->jsonSerialize(), $this->models),
            'next_prices' => array_map(static fn($x) => $x->jsonSerialize(), $this->nextPrices),
            'prices'      => array_map(static fn($x) => $x->jsonSerialize(), $this->prices),
            'symbols'     => array_map(static fn($x) => $x->jsonSerialize(), $this->symbols),
        ];
    }
}
