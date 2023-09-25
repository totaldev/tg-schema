<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an instant view version of a web page if available. Returns a 404 error if the web page has no instant view page
 */
class GetWebPageInstantView extends TdFunction
{
    public const TYPE_NAME = 'getWebPageInstantView';

    /**
     * The web page URL
     *
     * @var string
     */
    protected string $url;

    /**
     * Pass true to get full instant view for the web page
     *
     * @var bool
     */
    protected bool $forceFull;

    public function __construct(string $url, bool $forceFull)
    {
        $this->url = $url;
        $this->forceFull = $forceFull;
    }

    public static function fromArray(array $array): GetWebPageInstantView
    {
        return new static(
            $array['url'],
            $array['force_full'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'force_full' => $this->forceFull,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getForceFull(): bool
    {
        return $this->forceFull;
    }
}
