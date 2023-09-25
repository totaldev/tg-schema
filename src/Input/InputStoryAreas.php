<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of story areas to be added
 */
class InputStoryAreas extends TdObject
{
    public const TYPE_NAME = 'inputStoryAreas';

    /**
     * List of 0-10 input story areas
     *
     * @var InputStoryArea[]
     */
    protected array $areas;

    public function __construct(array $areas)
    {
        $this->areas = $areas;
    }

    public static function fromArray(array $array): InputStoryAreas
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['areas']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->areas),
        ];
    }

    public function getAreas(): array
    {
        return $this->areas;
    }
}
