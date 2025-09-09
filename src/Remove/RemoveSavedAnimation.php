<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes an animation from the list of saved animations.
 */
class RemoveSavedAnimation extends TdFunction
{
    public const TYPE_NAME = 'removeSavedAnimation';

    public function __construct(
        /**
         * Animation file to be removed.
         */
        protected InputFile $animation
    ) {}

    public static function fromArray(array $array): RemoveSavedAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
        );
    }

    public function getAnimation(): InputFile
    {
        return $this->animation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
        ];
    }
}
