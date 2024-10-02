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
    public const TYPE_NAME = 'internalLinkTypeInstantView';

    public function __construct(
        /**
         * URL to be passed to getWebPageInstantView.
         */
        protected string $url,
        /**
         * An URL to open if getWebPageInstantView fails.
         */
        protected string $fallbackUrl,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeInstantView
    {
        return new static(
            $array['url'],
            $array['fallback_url'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'url'          => $this->url,
            'fallback_url' => $this->fallbackUrl,
        ];
    }
}
