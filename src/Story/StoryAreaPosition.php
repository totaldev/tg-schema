<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Describes position of a clickable rectangle area on a story media.
 */
class StoryAreaPosition extends TdObject
{
    public const TYPE_NAME = 'storyAreaPosition';

    public function __construct(
        /**
         * The abscissa of the rectangle's center, as a percentage of the media width.
         */
        protected float $xPercentage,
        /**
         * The ordinate of the rectangle's center, as a percentage of the media height.
         */
        protected float $yPercentage,
        /**
         * The width of the rectangle, as a percentage of the media width.
         */
        protected float $widthPercentage,
        /**
         * The height of the rectangle, as a percentage of the media height.
         */
        protected float $heightPercentage,
        /**
         * Clockwise rotation angle of the rectangle, in degrees; 0-360.
         */
        protected float $rotationAngle,
        /**
         * The radius of the rectangle corner rounding, as a percentage of the media width.
         */
        protected float $cornerRadiusPercentage,
    ) {}

    public static function fromArray(array $array): StoryAreaPosition
    {
        return new static(
            $array['x_percentage'],
            $array['y_percentage'],
            $array['width_percentage'],
            $array['height_percentage'],
            $array['rotation_angle'],
            $array['corner_radius_percentage'],
        );
    }

    public function getCornerRadiusPercentage(): float
    {
        return $this->cornerRadiusPercentage;
    }

    public function getHeightPercentage(): float
    {
        return $this->heightPercentage;
    }

    public function getRotationAngle(): float
    {
        return $this->rotationAngle;
    }

    public function getWidthPercentage(): float
    {
        return $this->widthPercentage;
    }

    public function getXPercentage(): float
    {
        return $this->xPercentage;
    }

    public function getYPercentage(): float
    {
        return $this->yPercentage;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'x_percentage'             => $this->xPercentage,
            'y_percentage'             => $this->yPercentage,
            'width_percentage'         => $this->widthPercentage,
            'height_percentage'        => $this->heightPercentage,
            'rotation_angle'           => $this->rotationAngle,
            'corner_radius_percentage' => $this->cornerRadiusPercentage,
        ];
    }
}
