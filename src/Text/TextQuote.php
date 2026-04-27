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
    public const string TYPE_NAME = 'textQuote';

    public function __construct(
        /**
         * True, if the quote was manually chosen by the message sender.
         */
        protected bool          $isManual,
        /**
         * Approximate quote position in the original message in UTF-16 code units as specified by the message sender.
         */
        protected int           $position,
        /**
         * Text of the quote. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities can be present in the text.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): TextQuote
    {
        return new static(
            isManual: $array['is_manual'],
            position: $array['position'],
            text    : TdSchemaRegistry::fromArray($array['text']),
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

    public function setIsManual(bool $value): static
    {
        $this->isManual = $value;

        return $this;
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
            '@type'     => static::TYPE_NAME,
            'is_manual' => $this->isManual,
            'position'  => $this->position,
            'text'      => $this->text->jsonSerialize(),
        ];
    }
}
