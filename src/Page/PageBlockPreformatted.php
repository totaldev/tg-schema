<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A preformatted text paragraph.
 */
class PageBlockPreformatted extends PageBlock
{
    public const TYPE_NAME = 'pageBlockPreformatted';

    public function __construct(
        /**
         * Paragraph text.
         */
        protected RichText $text,
        /**
         * Programming language for which the text needs to be formatted.
         */
        protected string   $language,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockPreformatted
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['language'],
        );
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'text'     => $this->text->typeSerialize(),
            'language' => $this->language,
        ];
    }
}
