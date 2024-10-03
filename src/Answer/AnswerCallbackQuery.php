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
    public const TYPE_NAME = 'answerCallbackQuery';

    public function __construct(
        /**
         * Identifier of the callback query.
         */
        protected int    $callbackQueryId,
        /**
         * Text of the answer.
         */
        protected string $text,
        /**
         * Pass true to show an alert to the user instead of a toast notification.
         */
        protected bool   $showAlert,
        /**
         * URL to be opened.
         */
        protected string $url,
        /**
         * Time during which the result of the query can be cached, in seconds.
         */
        protected int    $cacheTime,
    ) {}

    public static function fromArray(array $array): AnswerCallbackQuery
    {
        return new static(
            $array['callback_query_id'],
            $array['text'],
            $array['show_alert'],
            $array['url'],
            $array['cache_time'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'callback_query_id' => $this->callbackQueryId,
            'text'              => $this->text,
            'show_alert'        => $this->showAlert,
            'url'               => $this->url,
            'cache_time'        => $this->cacheTime,
        ];
    }
}
