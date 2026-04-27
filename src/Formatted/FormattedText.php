<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Formatted;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Text\TextEntity;

/**
 * A text with some entities.
 */
class FormattedText extends TdObject
{
    public const string TYPE_NAME = 'formattedText';

    public function __construct(
        /**
         * Entities contained in the text. Entities can be nested, but must not mutually intersect with each other. Pre, Code, PreCode, and DateTime entities can't contain other entities. BlockQuote entities can't contain other BlockQuote entities. Bold, Italic, Underline, Strikethrough, and Spoiler entities can contain and can be part of any other entities. All other entities can't contain each other.
         *
         * @var TextEntity[]
         */
        protected array  $entities,
        /**
         * The text.
         */
        protected string $text,
    ) {}

    public static function fromArray(array $array): FormattedText
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
