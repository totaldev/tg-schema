<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

/**
 * A plain text.
 */
class RichTextPlain extends RichText
{
    public const string TYPE_NAME = 'richTextPlain';

    public function __construct(
        /**
         * Text.
         */
        protected string $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextPlain
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
