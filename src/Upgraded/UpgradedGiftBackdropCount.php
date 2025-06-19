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
class UpgradedGiftBackdropCount extends TdObject
{
    public const TYPE_NAME = 'upgradedGiftBackdropCount';

    public function __construct(
        /**
         * The backdrop.
         */
        protected UpgradedGiftBackdrop $backdrop,
        /**
         * Total number of gifts with the symbol.
         */
        protected int                  $totalCount
    ) {}

    public static function fromArray(array $array): UpgradedGiftBackdropCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['backdrop']),
            $array['total_count'],
        );
    }

    public function getBackdrop(): UpgradedGiftBackdrop
    {
        return $this->backdrop;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'backdrop'    => $this->backdrop->typeSerialize(),
            'total_count' => $this->totalCount,
        ];
    }
}
