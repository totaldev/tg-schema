<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A superscript rich text.
 */
class RichTextSuperscript extends RichText
{
    public const string TYPE_NAME = 'richTextSuperscript';

    public function __construct(
        /**
         * Text.
         */
        protected RichText $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextSuperscript
    {
        return new static(
            text: TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function setText(RichText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text->jsonSerialize(),
        ];
    }
}
