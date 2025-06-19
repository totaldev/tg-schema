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
    public const TYPE_NAME = 'backgroundFillGradient';

    public function __construct(
        /**
         * A top color of the background in the RGB format.
         */
        protected int $topColor,
        /**
         * A bottom color of the background in the RGB format.
         */
        protected int $bottomColor,
        /**
         * Clockwise rotation angle of the gradient, in degrees; 0-359. Must always be divisible by 45.
         */
        protected int $rotationAngle
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundFillGradient
    {
        return new static(
            $array['top_color'],
            $array['bottom_color'],
            $array['rotation_angle'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'top_color'      => $this->topColor,
            'bottom_color'   => $this->bottomColor,
            'rotation_angle' => $this->rotationAngle,
        ];
    }
}
