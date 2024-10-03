<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Callback;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a bot's answer to a callback query.
 */
class CallbackQueryAnswer extends TdObject
{
    public const TYPE_NAME = 'callbackQueryAnswer';

    public function __construct(
        /**
         * Text of the answer.
         */
        protected string $text,
        /**
         * True, if an alert must be shown to the user instead of a toast notification.
         */
        protected bool   $showAlert,
        /**
         * URL to be opened.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): CallbackQueryAnswer
    {
        return new static(
            $array['text'],
            $array['show_alert'],
            $array['url'],
        );
    }

    public function getShowAlert(): bool
    {
        return $this->showAlert;
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
            '@type'      => static::TYPE_NAME,
            'text'       => $this->text,
            'show_alert' => $this->showAlert,
            'url'        => $this->url,
        ];
    }
}
