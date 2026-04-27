<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * A button that copies specified text to clipboard.
 */
class InlineKeyboardButtonTypeCopyText extends InlineKeyboardButtonType
{
    public const string TYPE_NAME = 'inlineKeyboardButtonTypeCopyText';

    public function __construct(
        /**
         * The text to copy to clipboard.
         */
        protected string $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeCopyText
    {
        return new static(
            text: $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }
}
