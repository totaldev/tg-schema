<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Animations;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of animations
 */
class Animations extends TdObject
{
    public const TYPE_NAME = 'animations';

    /**
     * List of animations
     *
     * @var Animation[]
     */
    protected array $animations;

    public function __construct(array $animations)
    {
        $this->animations = $animations;
    }

    public static function fromArray(array $array): Animations
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['animations']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->animations),
        ];
    }

    public function getAnimations(): array
    {
        return $this->animations;
    }
}
