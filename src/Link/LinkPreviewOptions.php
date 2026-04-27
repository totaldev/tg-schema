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
    public const string TYPE_NAME = 'linkPreviewOptions';

    public function __construct(
        /**
         * True, if shown media preview must be large; ignored in secret chats or if the URL isn't explicitly specified.
         */
        protected bool   $forceLargeMedia,
        /**
         * True, if shown media preview must be small; ignored in secret chats or if the URL isn't explicitly specified.
         */
        protected bool   $forceSmallMedia,
        /**
         * True, if link preview must be disabled.
         */
        protected bool   $isDisabled,
        /**
         * True, if link preview must be shown above message text; otherwise, the link preview will be shown below the message text; ignored in secret chats.
         */
        protected bool   $showAboveText,
        /**
         * URL to use for link preview. If empty, then the first URL found in the message text will be used.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): LinkPreviewOptions
    {
        return new static(
            forceLargeMedia: $array['force_large_media'],
            forceSmallMedia: $array['force_small_media'],
            isDisabled     : $array['is_disabled'],
            showAboveText  : $array['show_above_text'],
            url            : $array['url'],
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

    public function setForceLargeMedia(bool $value): static
    {
        $this->forceLargeMedia = $value;

        return $this;
    }

    public function setForceSmallMedia(bool $value): static
    {
        $this->forceSmallMedia = $value;

        return $this;
    }

    public function setIsDisabled(bool $value): static
    {
        $this->isDisabled = $value;

        return $this;
    }

    public function setShowAboveText(bool $value): static
    {
        $this->showAboveText = $value;

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
            '@type'             => static::TYPE_NAME,
            'force_large_media' => $this->forceLargeMedia,
            'force_small_media' => $this->forceSmallMedia,
            'is_disabled'       => $this->isDisabled,
            'show_above_text'   => $this->showAboveText,
            'url'               => $this->url,
        ];
    }
}
