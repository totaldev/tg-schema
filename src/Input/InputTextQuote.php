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
    public const TYPE_NAME = 'inputTextQuote';

    public function __construct(
        /**
         * Text of the quote; 0-getOption("message_reply_quote_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed to be kept and must be kept in the quote.
         */
        protected FormattedText $text,
        /**
         * Quote position in the original message in UTF-16 code units.
         */
        protected int           $position,
    ) {}

    public static function fromArray(array $array): InputTextQuote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['position'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'text'     => $this->text->typeSerialize(),
            'position' => $this->position,
        ];
    }
}
