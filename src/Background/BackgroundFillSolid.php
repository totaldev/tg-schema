<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

/**
 * Describes a solid fill of a background.
 */
class BackgroundFillSolid extends BackgroundFill
{
    public const TYPE_NAME = 'backgroundFillSolid';

    public function __construct(
        /**
         * A color of the background in the RGB format.
         */
        protected int $color
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundFillSolid
    {
        return new static(
            $array['color'],
        );
    }

    public function getColor(): int
    {
        return $this->color;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'color' => $this->color,
        ];
    }
}
