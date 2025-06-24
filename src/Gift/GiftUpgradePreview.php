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
        protected array $backdrops
    ) {}

    public static function fromArray(array $array): GiftUpgradePreview
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['models']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['symbols']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backdrops']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->models),
            array_map(static fn($x) => $x->typeSerialize(), $this->symbols),
            array_map(static fn($x) => $x->typeSerialize(), $this->backdrops),
        ];
    }
}
