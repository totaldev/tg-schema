<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * A button that opens a Web App by calling openWebApp.
 */
class InlineKeyboardButtonTypeWebApp extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeWebApp';

    public function __construct(
        /**
         * An HTTP URL to pass to openWebApp.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeWebApp
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
