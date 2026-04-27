<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

/**
 * The button is a prepared keyboard button from a Mini App received via getPreparedKeyboardButton.
 */
class KeyboardButtonSourceWebApp extends KeyboardButtonSource
{
    public const string TYPE_NAME = 'keyboardButtonSourceWebApp';

    public function __construct(
        /**
         * Identifier of the bot that created the button.
         */
        protected int    $botUserId,
        /**
         * Identifier of the prepared button.
         */
        protected string $preparedButtonId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonSourceWebApp
    {
        return new static(
            botUserId       : $array['bot_user_id'],
            preparedButtonId: $array['prepared_button_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getPreparedButtonId(): string
    {
        return $this->preparedButtonId;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setPreparedButtonId(string $value): static
    {
        $this->preparedButtonId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_user_id'        => $this->botUserId,
            'prepared_button_id' => $this->preparedButtonId,
        ];
    }
}
