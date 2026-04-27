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
    public const string TYPE_NAME = 'sendWebAppData';

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
            botUserId : $array['bot_user_id'],
            buttonText: $array['button_text'],
            data      : $array['data'],
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setButtonText(string $value): static
    {
        $this->buttonText = $value;

        return $this;
    }

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
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
