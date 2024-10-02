<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text paragraph.
 */
class PageBlockParagraph extends PageBlock
{
    public const TYPE_NAME = 'pageBlockParagraph';

    public function __construct(
        /**
         * Paragraph text.
         */
        protected RichText $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockParagraph
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
