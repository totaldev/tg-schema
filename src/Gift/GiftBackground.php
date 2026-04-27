<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes background of a gift.
 */
class GiftBackground extends TdObject
{
    public const string TYPE_NAME = 'giftBackground';

    public function __construct(
        /**
         * Center color in RGB format.
         */
        protected int $centerColor,
        /**
         * Edge color in RGB format.
         */
        protected int $edgeColor,
        /**
         * Text color in RGB format.
         */
        protected int $textColor,
    ) {}

    public static function fromArray(array $array): GiftBackground
    {
        return new static(
            centerColor: $array['center_color'],
            edgeColor  : $array['edge_color'],
            textColor  : $array['text_color'],
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

    public function getTextColor(): int
    {
        return $this->textColor;
    }

    public function setCenterColor(int $value): static
    {
        $this->centerColor = $value;

        return $this;
    }

    public function setEdgeColor(int $value): static
    {
        $this->edgeColor = $value;

        return $this;
    }

    public function setTextColor(int $value): static
    {
        $this->textColor = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'center_color' => $this->centerColor,
            'edge_color'   => $this->edgeColor,
            'text_color'   => $this->textColor,
        ];
    }
}
