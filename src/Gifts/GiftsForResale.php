<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gifts;

use Totaldev\TgSchema\Gift\GiftForResale;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftBackdropCount;
use Totaldev\TgSchema\Upgraded\UpgradedGiftModelCount;
use Totaldev\TgSchema\Upgraded\UpgradedGiftSymbolCount;

/**
 * Describes gifts available for resale.
 */
class GiftsForResale extends TdObject
{
    public const TYPE_NAME = 'giftsForResale';

    public function __construct(
        /**
         * Total number of gifts found.
         */
        protected int    $totalCount,
        /**
         * The gifts.
         *
         * @var GiftForResale[]
         */
        protected array  $gifts,
        /**
         * Available models; for searchGiftsForResale requests without offset and attributes only.
         *
         * @var UpgradedGiftModelCount[]
         */
        protected array  $models,
        /**
         * Available symbols; for searchGiftsForResale requests without offset and attributes only.
         *
         * @var UpgradedGiftSymbolCount[]
         */
        protected array  $symbols,
        /**
         * Available backdrops; for searchGiftsForResale requests without offset and attributes only.
         *
         * @var UpgradedGiftBackdropCount[]
         */
        protected array  $backdrops,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
    ) {}

    public static function fromArray(array $array): GiftsForResale
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['models']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['symbols']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backdrops']),
            $array['next_offset'],
        );
    }

    public function getBackdrops(): array
    {
        return $this->backdrops;
    }

    public function getGifts(): array
    {
        return $this->gifts;
    }

    public function getModels(): array
    {
        return $this->models;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getSymbols(): array
    {
        return $this->symbols;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->gifts),
            array_map(static fn($x) => $x->typeSerialize(), $this->models),
            array_map(static fn($x) => $x->typeSerialize(), $this->symbols),
            array_map(static fn($x) => $x->typeSerialize(), $this->backdrops),
            'next_offset' => $this->nextOffset,
        ];
    }
}
