<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

/**
 * Describes a gradient fill of a background.
 */
class BackgroundFillGradient extends BackgroundFill
{
    public const string TYPE_NAME = 'backgroundFillGradient';

    public function __construct(
        /**
         * A bottom color of the background in the RGB format.
         */
        protected int $bottomColor,
        /**
         * Clockwise rotation angle of the gradient, in degrees; 0-359. Must always be divisible by 45.
         */
        protected int $rotationAngle,
        /**
         * A top color of the background in the RGB format.
         */
        protected int $topColor,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundFillGradient
    {
        return new static(
            bottomColor  : $array['bottom_color'],
            rotationAngle: $array['rotation_angle'],
            topColor     : $array['top_color'],
        );
    }

    public function getBottomColor(): int
    {
        return $this->bottomColor;
    }

    public function getRotationAngle(): int
    {
        return $this->rotationAngle;
    }

    public function getTopColor(): int
    {
        return $this->topColor;
    }

    public function setBottomColor(int $value): static
    {
        $this->bottomColor = $value;

        return $this;
    }

    public function setRotationAngle(int $value): static
    {
        $this->rotationAngle = $value;

        return $this;
    }

    public function setTopColor(int $value): static
    {
        $this->topColor = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'bottom_color'   => $this->bottomColor,
            'rotation_angle' => $this->rotationAngle,
            'top_color'      => $this->topColor,
        ];
    }
}
