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
    public const TYPE_NAME = 'richTextPlain';

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
            $array['text'],
        );
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
        ];
    }
}
