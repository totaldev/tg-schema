<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;

/**
 * Describes colors of a backdrop of an upgraded gift.
 */
class UpgradedGiftBackdropColors extends TdObject
{
    public const TYPE_NAME = 'upgradedGiftBackdropColors';

    public function __construct(
        /**
         * A color in the center of the backdrop in the RGB format.
         */
        protected int $centerColor,
        /**
         * A color on the edges of the backdrop in the RGB format.
         */
        protected int $edgeColor,
        /**
         * A color to be applied for the symbol in the RGB format.
         */
        protected int $symbolColor,
        /**
         * A color for the text on the backdrop in the RGB format.
         */
        protected int $textColor
    ) {}

    public static function fromArray(array $array): UpgradedGiftBackdropColors
    {
        return new static(
            $array['center_color'],
            $array['edge_color'],
            $array['symbol_color'],
            $array['text_color'],
        );
    }

    public function getCenterColor(): int
    {
        return $this->centerColor;
    }

    public function getEdgeColor(): int
    {
        return $this->edgeColor;
    }

    public function getSymbolColor(): int
    {
        return $this->symbolColor;
    }

    public function getTextColor(): int
    {
        return $this->textColor;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'center_color' => $this->centerColor,
            'edge_color'   => $this->edgeColor,
            'symbol_color' => $this->symbolColor,
            'text_color'   => $this->textColor,
        ];
    }
}
