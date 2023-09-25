<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of text entities
 */
class TextEntities extends TdObject
{
    public const TYPE_NAME = 'textEntities';

    /**
     * List of text entities
     *
     * @var TextEntity[]
     */
    protected array $entities;

    public function __construct(array $entities)
    {
        $this->entities = $entities;
    }

    public static function fromArray(array $array): TextEntities
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['entities']),
        );
    }

    public function getEntities(): array
    {
        return $this->entities;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->entities),
        ];
    }
}
