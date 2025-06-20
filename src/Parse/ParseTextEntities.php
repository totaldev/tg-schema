<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Parse;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Text\TextParseMode;

/**
 * Parses Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote, Code, Pre, PreCode, TextUrl and MentionName entities
 * from a marked-up text. Can be called synchronously.
 */
class ParseTextEntities extends TdFunction
{
    public const TYPE_NAME = 'parseTextEntities';

    public function __construct(
        /**
         * The text to parse.
         */
        protected string        $text,
        /**
         * Text parse mode.
         */
        protected TextParseMode $parseMode
    ) {}

    public static function fromArray(array $array): ParseTextEntities
    {
        return new static(
            $array['text'],
            TdSchemaRegistry::fromArray($array['parse_mode']),
        );
    }

    public function getParseMode(): TextParseMode
    {
        return $this->parseMode;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'text'       => $this->text,
            'parse_mode' => $this->parseMode->typeSerialize(),
        ];
    }
}
