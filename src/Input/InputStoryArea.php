<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Story\StoryAreaPosition;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a clickable rectangle area on a story media to be added.
 */
class InputStoryArea extends TdObject
{
    public const TYPE_NAME = 'inputStoryArea';

    public function __construct(
        /**
         * Position of the area.
         */
        protected StoryAreaPosition  $position,
        /**
         * Type of the area.
         */
        protected InputStoryAreaType $type
    ) {}

    public static function fromArray(array $array): InputStoryArea
    {
        return new static(
            TdSchemaRegistry::fromArray($array['position']),
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getPosition(): StoryAreaPosition
    {
        return $this->position;
    }

    public function getType(): InputStoryAreaType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position->typeSerialize(),
            'type'     => $this->type->typeSerialize(),
        ];
    }
}
