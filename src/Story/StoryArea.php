<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a clickable rectangle area on a story media
 */
class StoryArea extends TdObject
{
    public const TYPE_NAME = 'storyArea';

    /**
     * Position of the area
     *
     * @var StoryAreaPosition
     */
    protected StoryAreaPosition $position;

    /**
     * Type of the area
     *
     * @var StoryAreaType
     */
    protected StoryAreaType $type;

    public function __construct(StoryAreaPosition $position, StoryAreaType $type)
    {
        $this->position = $position;
        $this->type = $type;
    }

    public static function fromArray(array $array): StoryArea
    {
        return new static(
            TdSchemaRegistry::fromArray($array['position']),
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'position' => $this->position->typeSerialize(),
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getPosition(): StoryAreaPosition
    {
        return $this->position;
    }

    public function getType(): StoryAreaType
    {
        return $this->type;
    }
}
