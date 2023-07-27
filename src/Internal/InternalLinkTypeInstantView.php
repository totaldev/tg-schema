<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link must be opened in an Instant View. Call getWebPageInstantView with the given URL to process the link
 */
class InternalLinkTypeInstantView extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeInstantView';

    /**
     * URL to be passed to getWebPageInstantView
     *
     * @var string
     */
    protected string $url;

    /**
     * An URL to open if getWebPageInstantView fails
     *
     * @var string
     */
    protected string $fallbackUrl;

    public function __construct(string $url, string $fallbackUrl)
    {
        parent::__construct();

        $this->url = $url;
        $this->fallbackUrl = $fallbackUrl;
    }

    public static function fromArray(array $array): InternalLinkTypeInstantView
    {
        return new static(
            $array['url'],
            $array['fallback_url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'fallback_url' => $this->fallbackUrl,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getFallbackUrl(): string
    {
        return $this->fallbackUrl;
    }
}
