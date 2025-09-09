<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdObject;

/**
 * Options to be used for generation of a link preview.
 */
class LinkPreviewOptions extends TdObject
{
    public const TYPE_NAME = 'linkPreviewOptions';

    public function __construct(
        /**
         * True, if link preview must be disabled.
         */
        protected bool   $isDisabled,
        /**
         * URL to use for link preview. If empty, then the first URL found in the message text will be used.
         */
        protected string $url,
        /**
         * True, if shown media preview must be small; ignored in secret chats or if the URL isn't explicitly specified.
         */
        protected bool   $forceSmallMedia,
        /**
         * True, if shown media preview must be large; ignored in secret chats or if the URL isn't explicitly specified.
         */
        protected bool   $forceLargeMedia,
        /**
         * True, if link preview must be shown above message text; otherwise, the link preview will be shown below the message text; ignored in secret chats.
         */
        protected bool   $showAboveText,
    ) {}

    public static function fromArray(array $array): LinkPreviewOptions
    {
        return new static(
            $array['is_disabled'],
            $array['url'],
            $array['force_small_media'],
            $array['force_large_media'],
            $array['show_above_text'],
        );
    }

    public function getForceLargeMedia(): bool
    {
        return $this->forceLargeMedia;
    }

    public function getForceSmallMedia(): bool
    {
        return $this->forceSmallMedia;
    }

    public function getIsDisabled(): bool
    {
        return $this->isDisabled;
    }

    public function getShowAboveText(): bool
    {
        return $this->showAboveText;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'is_disabled'       => $this->isDisabled,
            'url'               => $this->url,
            'force_small_media' => $this->forceSmallMedia,
            'force_large_media' => $this->forceLargeMedia,
            'show_above_text'   => $this->showAboveText,
        ];
    }
}
