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
    public const string TYPE_NAME = 'callbackQueryAnswer';

    public function __construct(
        /**
         * True, if an alert must be shown to the user instead of a toast notification.
         */
        protected bool   $showAlert,
        /**
         * Text of the answer.
         */
        protected string $text,
        /**
         * URL to be opened.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): CallbackQueryAnswer
    {
        return new static(
            showAlert: $array['show_alert'],
            text     : $array['text'],
            url      : $array['url'],
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

    public function setShowAlert(bool $value): static
    {
        $this->showAlert = $value;

        return $this;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

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
            'show_alert' => $this->showAlert,
            'text'       => $this->text,
            'url'        => $this->url,
        ];
    }
}
