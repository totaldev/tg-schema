<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends data received from a keyboardButtonTypeWebApp Web App to a bot.
 */
class SendWebAppData extends TdFunction
{
    public const TYPE_NAME = 'sendWebAppData';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * Text of the keyboardButtonTypeWebApp button, which opened the Web App.
         */
        protected string $buttonText,
        /**
         * The data.
         */
        protected string $data,
    ) {}

    public static function fromArray(array $array): SendWebAppData
    {
        return new static(
            $array['bot_user_id'],
            $array['button_text'],
            $array['data'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'button_text' => $this->buttonText,
            'data'        => $this->data,
        ];
    }
}
