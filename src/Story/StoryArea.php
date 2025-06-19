<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a clickable rectangle area on a story media.
 */
class StoryArea extends TdObject
{
    public const TYPE_NAME = 'storyArea';

    public function __construct(
        /**
         * Position of the area.
         */
        protected StoryAreaPosition $position,
        /**
         * Type of the area.
         */
        protected StoryAreaType     $type
    ) {}

    public static function fromArray(array $array): StoryArea
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

    public function getType(): StoryAreaType
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
