<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A rich text URL link.
 */
class RichTextUrl extends RichText
{
    public const string TYPE_NAME = 'richTextUrl';

    public function __construct(
        /**
         * True, if the URL has cached instant view server-side.
         */
        protected bool     $isCached,
        /**
         * Text.
         */
        protected RichText $text,
        /**
         * URL.
         */
        protected string   $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextUrl
    {
        return new static(
            isCached: $array['is_cached'],
            text    : TdSchemaRegistry::fromArray($array['text']),
            url     : $array['url'],
        );
    }

    public function getIsCached(): bool
    {
        return $this->isCached;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setIsCached(bool $value): static
    {
        $this->isCached = $value;

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
            '@type'     => static::TYPE_NAME,
            'is_cached' => $this->isCached,
            'text'      => $this->text->jsonSerialize(),
            'url'       => $this->url,
        ];
    }
}
