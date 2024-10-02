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
    public const TYPE_NAME = 'keyboardButtonTypeWebApp';

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
            $array['url'],
        );
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }
}
