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
    public const string TYPE_NAME = 'pageBlockPreformatted';

    public function __construct(
        /**
         * Programming language for which the text needs to be formatted.
         */
        protected string   $language,
        /**
         * Paragraph text.
         */
        protected RichText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockPreformatted
    {
        return new static(
            language: $array['language'],
            text    : TdSchemaRegistry::fromArray($array['text']),
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

    public function setLanguage(string $value): static
    {
        $this->language = $value;

        return $this;
    }

    public function setText(RichText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'language' => $this->language,
            'text'     => $this->text->jsonSerialize(),
        ];
    }
}
