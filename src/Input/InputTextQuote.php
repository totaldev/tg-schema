<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes manually chosen quote from another message.
 */
class InputTextQuote extends TdObject
{
    public const string TYPE_NAME = 'inputTextQuote';

    public function __construct(
        /**
         * Quote position in the original message in UTF-16 code units.
         */
        protected int           $position,
        /**
         * Text of the quote; 0-getOption("message_reply_quote_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, and DateTime entities are allowed to be kept and must be kept in the quote.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): InputTextQuote
    {
        return new static(
            position: $array['position'],
            text    : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setPosition(int $value): static
    {
        $this->position = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position,
            'text'     => $this->text->jsonSerialize(),
        ];
    }
}
