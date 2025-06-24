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
    public const TYPE_NAME = 'formattedText';

    public function __construct(
        /**
         * The text.
         */
        protected string $text,
        /**
         * Entities contained in the text. Entities can be nested, but must not mutually intersect with each other. Pre, Code and PreCode entities can't contain other entities. BlockQuote entities can't contain other BlockQuote entities. Bold, Italic, Underline, Strikethrough, and Spoiler entities can contain and can be part of any other entities. All other entities can't contain each other.
         *
         * @var TextEntity[]
         */
        protected array  $entities
    ) {}

    public static function fromArray(array $array): FormattedText
    {
        return new static(
            $array['text'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['entities']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            array_map(static fn($x) => $x->typeSerialize(), $this->entities),
        ];
    }
}
