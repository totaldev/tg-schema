<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An underlined rich text.
 */
class RichTextUnderline extends RichText
{
    public const TYPE_NAME = 'richTextUnderline';

    public function __construct(
        /**
         * Text.
         */
        protected RichText $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextUnderline
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getText(): RichText
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
