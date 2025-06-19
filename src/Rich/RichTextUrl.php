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
    public const TYPE_NAME = 'richTextUrl';

    public function __construct(
        /**
         * Text.
         */
        protected RichText $text,
        /**
         * URL.
         */
        protected string   $url,
        /**
         * True, if the URL has cached instant view server-side.
         */
        protected bool     $isCached
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextUrl
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['url'],
            $array['is_cached'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'text'      => $this->text->typeSerialize(),
            'url'       => $this->url,
            'is_cached' => $this->isCached,
        ];
    }
}
