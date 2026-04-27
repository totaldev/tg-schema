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
    public const string TYPE_NAME = 'giftsForResale';

    public function __construct(
        /**
         * Available backdrops; for searchGiftsForResale requests without offset and attributes only.
         *
         * @var UpgradedGiftBackdropCount[]
         */
        protected array  $backdrops,
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
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * Available symbols; for searchGiftsForResale requests without offset and attributes only.
         *
         * @var UpgradedGiftSymbolCount[]
         */
        protected array  $symbols,
        /**
         * Total number of gifts found.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): GiftsForResale
    {
        return new static(
            backdrops : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backdrops']),
            gifts     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
            models    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['models']),
            nextOffset: $array['next_offset'],
            symbols   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['symbols']),
            totalCount: $array['total_count'],
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

    public function setBackdrops(array $value): static
    {
        $this->backdrops = $value;

        return $this;
    }

    public function setGifts(array $value): static
    {
        $this->gifts = $value;

        return $this;
    }

    public function setModels(array $value): static
    {
        $this->models = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setSymbols(array $value): static
    {
        $this->symbols = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'backdrops'   => array_map(static fn($x) => $x->jsonSerialize(), $this->backdrops),
            'gifts'       => array_map(static fn($x) => $x->jsonSerialize(), $this->gifts),
            'models'      => array_map(static fn($x) => $x->jsonSerialize(), $this->models),
            'next_offset' => $this->nextOffset,
            'symbols'     => array_map(static fn($x) => $x->jsonSerialize(), $this->symbols),
            'total_count' => $this->totalCount,
        ];
    }
}
