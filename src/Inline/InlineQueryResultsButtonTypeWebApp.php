<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * Describes the button that opens a Web App by calling getWebAppUrl.
 */
class InlineQueryResultsButtonTypeWebApp extends InlineQueryResultsButtonType
{
    public const string TYPE_NAME = 'inlineQueryResultsButtonTypeWebApp';

    public function __construct(
        /**
         * An HTTP URL to pass to getWebAppUrl.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultsButtonTypeWebApp
    {
        return new static(
            url: $array['url'],
        );
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }
}
