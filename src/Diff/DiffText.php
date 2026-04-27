<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Diff;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text with some changes highlighted.
 */
class DiffText extends TdObject
{
    public const string TYPE_NAME = 'diffText';

    public function __construct(
        /**
         * Entities describing changes in the text. Entities don't mutually intersect with each other.
         *
         * @var DiffEntity[]
         */
        protected array  $entities,
        /**
         * The text.
         */
        protected string $text,
    ) {}

    public static function fromArray(array $array): DiffText
    {
        return new static(
            entities: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['entities']),
            text    : $array['text'],
        );
    }

    public function getEntities(): array
    {
        return $this->entities;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setEntities(array $value): static
    {
        $this->entities = $value;

        return $this;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'entities' => array_map(static fn($x) => $x->jsonSerialize(), $this->entities),
            'text'     => $this->text,
        ];
    }
}
