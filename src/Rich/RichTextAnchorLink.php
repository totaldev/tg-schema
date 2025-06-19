<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A link to an anchor on the same page.
 */
class RichTextAnchorLink extends RichText
{
    public const TYPE_NAME = 'richTextAnchorLink';

    public function __construct(
        /**
         * The link text.
         */
        protected RichText $text,
        /**
         * The anchor name. If the name is empty, the link must bring back to top.
         */
        protected string   $anchorName,
        /**
         * An HTTP URL, opening the anchor.
         */
        protected string   $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextAnchorLink
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
