<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a symbol shown on the pattern of an upgraded gift.
 */
class UpgradedGiftSymbolCount extends TdObject
{
    public const TYPE_NAME = 'upgradedGiftSymbolCount';

    public function __construct(
        /**
         * The symbol.
         */
        protected UpgradedGiftSymbol $symbol,
        /**
         * Total number of gifts with the symbol.
         */
        protected int                $totalCount
    ) {}

    public static function fromArray(array $array): UpgradedGiftSymbolCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['symbol']),
            $array['total_count'],
        );
    }

    public function getSymbol(): UpgradedGiftSymbol
    {
        return $this->symbol;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'symbol'      => $this->symbol->typeSerialize(),
            'total_count' => $this->totalCount,
        ];
    }
}
