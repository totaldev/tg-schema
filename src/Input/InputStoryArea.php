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
    public const string TYPE_NAME = 'inputStoryArea';

    public function __construct(
        /**
         * Position of the area.
         */
        protected StoryAreaPosition  $position,
        /**
         * Type of the area.
         */
        protected InputStoryAreaType $type,
    ) {}

    public static function fromArray(array $array): InputStoryArea
    {
        return new static(
            position: TdSchemaRegistry::fromArray($array['position']),
            type    : TdSchemaRegistry::fromArray($array['type']),
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

    public function setPosition(StoryAreaPosition $value): static
    {
        $this->position = $value;

        return $this;
    }

    public function setType(InputStoryAreaType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position->jsonSerialize(),
            'type'     => $this->type->jsonSerialize(),
        ];
    }
}
