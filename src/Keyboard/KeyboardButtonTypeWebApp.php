<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

/**
 * A button that opens a Web App by calling getWebAppUrl.
 */
class KeyboardButtonTypeWebApp extends KeyboardButtonType
{
    public const string TYPE_NAME = 'keyboardButtonTypeWebApp';

    public function __construct(
        /**
         * An HTTP URL to pass to getWebAppUrl.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeWebApp
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
