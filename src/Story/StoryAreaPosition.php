<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes position of a clickable rectangle area on a story media
 */
class StoryAreaPosition extends TdObject
{
    public const TYPE_NAME = 'storyAreaPosition';

    /**
     * The ordinate of the rectangle's center, as a percentage of the media height
     *
     * @var float
     */
    protected float $heightPercentage;

    /**
     * Clockwise rotation angle of the rectangle, in degrees; 0-360
     *
     * @var float
     */
    protected float $rotationAngle;

    /**
     * The width of the rectangle, as a percentage of the media width
     *
     * @var float
     */
    protected float $widthPercentage;

    /**
     * The abscissa of the rectangle's center, as a percentage of the media width
     *
     * @var float
     */
    protected float $xPercentage;

    /**
     * The ordinate of the rectangle's center, as a percentage of the media height
     *
     * @var float
     */
    protected float $yPercentage;

    public function __construct(
        float $xPercentage,
        float $yPercentage,
        float $widthPercentage,
        float $heightPercentage,
        float $rotationAngle,
    )
    {
        $this->xPercentage = $xPercentage;
        $this->yPercentage = $yPercentage;
        $this->widthPercentage = $widthPercentage;
        $this->heightPercentage = $heightPercentage;
        $this->rotationAngle = $rotationAngle;
    }

    public static function fromArray(array $array): StoryAreaPosition
    {
        return new static(
            $array['x_percentage'],
            $array['y_percentage'],
            $array['width_percentage'],
            $array['height_percentage'],
            $array['rotation_angle'],
        );
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
            '@type' => static::TYPE_NAME,
            'x_percentage' => $this->xPercentage,
            'y_percentage' => $this->yPercentage,
            'width_percentage' => $this->widthPercentage,
            'height_percentage' => $this->heightPercentage,
            'rotation_angle' => $this->rotationAngle,
        ];
    }
}
