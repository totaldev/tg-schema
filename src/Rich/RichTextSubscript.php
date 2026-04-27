<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A subscript rich text.
 */
class RichTextSubscript extends RichText
{
    public const string TYPE_NAME = 'richTextSubscript';

    public function __construct(
        /**
         * Text.
         */
        protected RichText $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextSubscript
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
