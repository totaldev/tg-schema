<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a part of the text that needs to be formatted in some unusual way.
 */
class TextEntity extends TdObject
{
    public const string TYPE_NAME = 'textEntity';

    public function __construct(
        /**
         * Length of the entity, in UTF-16 code units.
         */
        protected int            $length,
        /**
         * Offset of the entity, in UTF-16 code units.
         */
        protected int            $offset,
        /**
         * Type of the entity.
         */
        protected TextEntityType $type,
    ) {}

    public static function fromArray(array $array): TextEntity
    {
        return new static(
            length: $array['length'],
            offset: $array['offset'],
            type  : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getType(): TextEntityType
    {
        return $this->type;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setType(TextEntityType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'length' => $this->length,
            'offset' => $this->offset,
            'type'   => $this->type->jsonSerialize(),
        ];
    }
}
