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
    public const TYPE_NAME = 'richTextReference';

    public function __construct(
        /**
         * The text.
         */
        protected RichText $text,
        /**
         * The name of a richTextAnchor object, which is the first element of the target richTexts object.
         */
        protected string   $anchorName,
        /**
         * An HTTP URL, opening the reference.
         */
        protected string   $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextReference
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['anchor_name'],
            $array['url'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'text'        => $this->text->typeSerialize(),
            'anchor_name' => $this->anchorName,
            'url'         => $this->url,
        ];
    }
}
