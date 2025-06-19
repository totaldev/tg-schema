<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an instant view version of a web page if available. This is an offline method if only_local is true. Returns a 404 error if the web page has no
 * instant view page.
 */
class GetWebPageInstantView extends TdFunction
{
    public const TYPE_NAME = 'getWebPageInstantView';

    public function __construct(
        /**
         * The web page URL.
         */
        protected string $url,
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool   $onlyLocal
    ) {}

    public static function fromArray(array $array): GetWebPageInstantView
    {
        return new static(
            $array['url'],
            $array['only_local'],
        );
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'url'        => $this->url,
            'only_local' => $this->onlyLocal,
        ];
    }
}
