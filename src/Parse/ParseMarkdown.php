<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Parse;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Parses Markdown entities in a human-friendly format, ignoring markup errors. Can be called synchronously.
 */
class ParseMarkdown extends TdFunction
{
    public const TYPE_NAME = 'parseMarkdown';

    public function __construct(
        /**
         * The text to parse. For example, "__italic__ ~~strikethrough~~ ||spoiler|| **bold** `code` ```pre``` __[italic__ text_url](telegram.org) __italic**bold italic__bold**".
         */
        protected FormattedText $text
    ) {}

    public static function fromArray(array $array): ParseMarkdown
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text->typeSerialize(),
        ];
    }
}
