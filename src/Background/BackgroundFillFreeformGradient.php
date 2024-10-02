<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

/**
 * Describes a freeform gradient fill of a background.
 */
class BackgroundFillFreeformGradient extends BackgroundFill
{
    public const TYPE_NAME = 'backgroundFillFreeformGradient';

    public function __construct(
        /**
         * A list of 3 or 4 colors of the freeform gradient in the RGB24 format.
         *
         * @var int[]
         */
        protected array $colors
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundFillFreeformGradient
    {
        return new static(
            $array['colors'],
        );
    }

    public function getColors(): array
    {
        return $this->colors;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'colors' => $this->colors,
        ];
    }
}
