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
    public const string TYPE_NAME = 'richTextAnchorLink';

    public function __construct(
        /**
         * The anchor name. If the name is empty, the link must bring back to top.
         */
        protected string   $anchorName,
        /**
         * The link text.
         */
        protected RichText $text,
        /**
         * An HTTP URL, opening the anchor.
         */
        protected string   $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextAnchorLink
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
