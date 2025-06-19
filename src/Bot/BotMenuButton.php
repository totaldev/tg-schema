<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a button to be shown instead of bot commands menu button.
 */
class BotMenuButton extends TdObject
{
    public const TYPE_NAME = 'botMenuButton';

    public function __construct(
        /**
         * Text of the button.
         */
        protected string $text,
        /**
         * URL of a Web App to open when the button is pressed. If the link is of the type internalLinkTypeWebApp, then it must be processed accordingly. Otherwise, the link must be passed to openWebApp.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): BotMenuButton
    {
        return new static(
            $array['text'],
            $array['url'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'url'   => $this->url,
        ];
    }
}
