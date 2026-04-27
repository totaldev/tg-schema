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
    public const string TYPE_NAME = 'pageBlockEmbedded';

    public function __construct(
        /**
         * True, if scrolling needs to be allowed.
         */
        protected bool             $allowScrolling,
        /**
         * Block caption.
         */
        protected PageBlockCaption $caption,
        /**
         * Block height; 0 if unknown.
         */
        protected int              $height,
        /**
         * HTML-markup of the embedded page.
         */
        protected string           $html,
        /**
         * True, if the block must be full width.
         */
        protected bool             $isFullWidth,
        /**
         * Poster photo, if available; may be null.
         */
        protected ?Photo           $posterPhoto,
        /**
         * URL of the embedded page, if available.
         */
        protected string           $url,
        /**
         * Block width; 0 if unknown.
         */
        protected int              $width,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockEmbedded
    {
        return new static(
            allowScrolling: $array['allow_scrolling'],
            caption       : TdSchemaRegistry::fromArray($array['caption']),
            height        : $array['height'],
            html          : $array['html'],
            isFullWidth   : $array['is_full_width'],
            posterPhoto   : (isset($array['poster_photo']) ? TdSchemaRegistry::fromArray($array['poster_photo']) : null),
            url           : $array['url'],
            width         : $array['width'],
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

    public function setAllowScrolling(bool $value): static
    {
        $this->allowScrolling = $value;

        return $this;
    }

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setHtml(string $value): static
    {
        $this->html = $value;

        return $this;
    }

    public function setIsFullWidth(bool $value): static
    {
        $this->isFullWidth = $value;

        return $this;
    }

    public function setPosterPhoto(?Photo $value): static
    {
        $this->posterPhoto = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'allow_scrolling' => $this->allowScrolling,
            'caption'         => $this->caption->jsonSerialize(),
            'height'          => $this->height,
            'html'            => $this->html,
            'is_full_width'   => $this->isFullWidth,
            'poster_photo'    => (null !== $this->posterPhoto ? $this->posterPhoto->jsonSerialize() : null),
            'url'             => $this->url,
            'width'           => $this->width,
        ];
    }
}
