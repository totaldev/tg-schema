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
 * Contains all possible variants of upgraded gifts for the given regular gift.
 */
class GiftUpgradeVariants extends TdObject
{
    public const string TYPE_NAME = 'giftUpgradeVariants';

    public function __construct(
        /**
         * Backdrops that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftBackdrop[]
         */
        protected array $backdrops,
        /**
         * Models that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftModel[]
         */
        protected array $models,
        /**
         * Symbols that can be chosen for the gift after upgrade.
         *
         * @var UpgradedGiftSymbol[]
         */
        protected array $symbols,
    ) {}

    public static function fromArray(array $array): GiftUpgradeVariants
    {
        return new static(
            backdrops: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backdrops']),
            models   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['models']),
            symbols  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['symbols']),
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

    public function setSymbols(array $value): static
    {
        $this->symbols = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'backdrops' => array_map(static fn($x) => $x->jsonSerialize(), $this->backdrops),
            'models'    => array_map(static fn($x) => $x->jsonSerialize(), $this->models),
            'symbols'   => array_map(static fn($x) => $x->jsonSerialize(), $this->symbols),
        ];
    }
}
