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
    public const string TYPE_NAME = 'getWebPageInstantView';

    public function __construct(
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool   $onlyLocal,
        /**
         * The web page URL.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): GetWebPageInstantView
    {
        return new static(
            onlyLocal: $array['only_local'],
            url      : $array['url'],
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

    public function setOnlyLocal(bool $value): static
    {
        $this->onlyLocal = $value;

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
            '@type'      => static::TYPE_NAME,
            'only_local' => $this->onlyLocal,
            'url'        => $this->url,
        ];
    }
}
