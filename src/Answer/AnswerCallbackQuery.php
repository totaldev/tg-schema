<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the result of a callback query; for bots only.
 */
class AnswerCallbackQuery extends TdFunction
{
    public const string TYPE_NAME = 'answerCallbackQuery';

    public function __construct(
        /**
         * Time during which the result of the query can be cached, in seconds.
         */
        protected int    $cacheTime,
        /**
         * Identifier of the callback query.
         */
        protected int    $callbackQueryId,
        /**
         * Pass true to show an alert to the user instead of a toast notification.
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

    public static function fromArray(array $array): AnswerCallbackQuery
    {
        return new static(
            cacheTime      : $array['cache_time'],
            callbackQueryId: $array['callback_query_id'],
            showAlert      : $array['show_alert'],
            text           : $array['text'],
            url            : $array['url'],
        );
    }

    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }

    public function getCallbackQueryId(): int
    {
        return $this->callbackQueryId;
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

    public function setCacheTime(int $value): static
    {
        $this->cacheTime = $value;

        return $this;
    }

    public function setCallbackQueryId(int $value): static
    {
        $this->callbackQueryId = $value;

        return $this;
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
            '@type'             => static::TYPE_NAME,
            'cache_time'        => $this->cacheTime,
            'callback_query_id' => $this->callbackQueryId,
            'show_alert'        => $this->showAlert,
            'text'              => $this->text,
            'url'               => $this->url,
        ];
    }
}
