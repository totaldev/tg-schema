<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link must be opened in an Instant View. Call getWebPageInstantView with the given URL to process the link. If Instant View is found, then show it,
 * otherwise, open the fallback URL in an external browser.
 */
class InternalLinkTypeInstantView extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeInstantView';

    public function __construct(
        /**
         * An URL to open if getWebPageInstantView fails.
         */
        protected string $fallbackUrl,
        /**
         * URL to be passed to getWebPageInstantView.
         */
        protected string $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeInstantView
    {
        return new static(
            fallbackUrl: $array['fallback_url'],
            url        : $array['url'],
        );
    }

    public function getFallbackUrl(): string
    {
        return $this->fallbackUrl;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setFallbackUrl(string $value): static
    {
        $this->fallbackUrl = $value;

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
            '@type'        => static::TYPE_NAME,
            'fallback_url' => $this->fallbackUrl,
            'url'          => $this->url,
        ];
    }
}
