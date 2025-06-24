<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Animations;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of animations.
 */
class Animations extends TdObject
{
    public const TYPE_NAME = 'animations';

    public function __construct(
        /**
         * List of animations.
         *
         * @var Animation[]
         */
        protected array $animations
    ) {}

    public static function fromArray(array $array): Animations
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['animations']),
        );
    }

    public function getAnimations(): array
    {
        return $this->animations;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->animations),
        ];
    }
}
