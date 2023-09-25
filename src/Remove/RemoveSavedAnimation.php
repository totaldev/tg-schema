<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes an animation from the list of saved animations
 */
class RemoveSavedAnimation extends TdFunction
{
    public const TYPE_NAME = 'removeSavedAnimation';

    /**
     * Animation file to be removed
     *
     * @var InputFile
     */
    protected InputFile $animation;

    public function __construct(InputFile $animation)
    {
        $this->animation = $animation;
    }

    public static function fromArray(array $array): RemoveSavedAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'animation' => $this->animation->typeSerialize(),
        ];
    }

    public function getAnimation(): InputFile
    {
        return $this->animation;
    }
}
