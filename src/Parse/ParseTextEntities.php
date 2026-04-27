<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Parse;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Text\TextParseMode;

/**
 * Parses Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote, Code, Pre, PreCode, TextUrl, MentionName, and
 * DateTime entities from a marked-up text. Can be called synchronously.
 */
class ParseTextEntities extends TdFunction
{
    public const string TYPE_NAME = 'parseTextEntities';

    public function __construct(
        /**
         * Text parse mode.
         */
        protected TextParseMode $parseMode,
        /**
         * The text to parse.
         */
        protected string        $text,
    ) {}

    public static function fromArray(array $array): ParseTextEntities
    {
        return new static(
            parseMode: TdSchemaRegistry::fromArray($array['parse_mode']),
            text     : $array['text'],
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

    public function setParseMode(TextParseMode $value): static
    {
        $this->parseMode = $value;

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
            '@type'      => static::TYPE_NAME,
            'parse_mode' => $this->parseMode->jsonSerialize(),
            'text'       => $this->text,
        ];
    }
}
