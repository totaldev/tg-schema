<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes manually or automatically chosen quote from another message.
 */
class TextQuote extends TdObject
{
    public const TYPE_NAME = 'textQuote';

    public function __construct(
        /**
         * Text of the quote. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities can be present in the text.
         */
        protected FormattedText $text,
        /**
         * Approximate quote position in the original message in UTF-16 code units as specified by the message sender.
         */
        protected int           $position,
        /**
         * True, if the quote was manually chosen by the message sender.
         */
        protected bool          $isManual
    ) {}

    public static function fromArray(array $array): TextQuote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['position'],
            $array['is_manual'],
        );
    }

    public function getIsManual(): bool
    {
        return $this->isManual;
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
            '@type'     => static::TYPE_NAME,
            'text'      => $this->text->typeSerialize(),
            'position'  => $this->position,
            'is_manual' => $this->isManual,
        ];
    }
}
