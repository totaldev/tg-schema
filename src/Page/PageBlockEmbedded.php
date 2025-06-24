<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An embedded web page.
 */
class PageBlockEmbedded extends PageBlock
{
    public const TYPE_NAME = 'pageBlockEmbedded';

    public function __construct(
        /**
         * URL of the embedded page, if available.
         */
        protected string           $url,
        /**
         * HTML-markup of the embedded page.
         */
        protected string           $html,
        /**
         * Poster photo, if available; may be null.
         */
        protected ?Photo           $posterPhoto,
        /**
         * Block width; 0 if unknown.
         */
        protected int              $width,
        /**
         * Block height; 0 if unknown.
         */
        protected int              $height,
        /**
         * Block caption.
         */
        protected PageBlockCaption $caption,
        /**
         * True, if the block must be full width.
         */
        protected bool             $isFullWidth,
        /**
         * True, if scrolling needs to be allowed.
         */
        protected bool             $allowScrolling,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockEmbedded
    {
        return new static(
            $array['url'],
            $array['html'],
            isset($array['poster_photo']) ? TdSchemaRegistry::fromArray($array['poster_photo']) : null,
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['is_full_width'],
            $array['allow_scrolling'],
        );
    }

    public function getAllowScrolling(): bool
    {
        return $this->allowScrolling;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function getIsFullWidth(): bool
    {
        return $this->isFullWidth;
    }

    public function getPosterPhoto(): ?Photo
    {
        return $this->posterPhoto;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'url'             => $this->url,
            'html'            => $this->html,
            'poster_photo'    => $this->posterPhoto ?? null,
            'width'           => $this->width,
            'height'          => $this->height,
            'caption'         => $this->caption->typeSerialize(),
            'is_full_width'   => $this->isFullWidth,
            'allow_scrolling' => $this->allowScrolling,
        ];
    }
}
