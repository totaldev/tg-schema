<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A reference to a richTexts object on the same page.
 */
class RichTextReference extends RichText
{
    public const string TYPE_NAME = 'richTextReference';

    public function __construct(
        /**
         * The name of a richTextAnchor object, which is the first element of the target richTexts object.
         */
        protected string   $anchorName,
        /**
         * The text.
         */
        protected RichText $text,
        /**
         * An HTTP URL, opening the reference.
         */
        protected string   $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextReference
    {
        return new static(
            anchorName: $array['anchor_name'],
            text      : TdSchemaRegistry::fromArray($array['text']),
            url       : $array['url'],
        );
    }

    public function getAnchorName(): string
    {
        return $this->anchorName;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAnchorName(string $value): static
    {
        $this->anchorName = $value;

        return $this;
    }

    public function setText(RichText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'anchor_name' => $this->anchorName,
            'text'        => $this->text->jsonSerialize(),
            'url'         => $this->url,
        ];
    }
}
