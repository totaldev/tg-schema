<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a keyboard button prepared by the bot for the user. The button will be of the type keyboardButtonTypeRequestUsers, keyboardButtonTypeRequestChat, or
 * keyboardButtonTypeRequestManagedBot.
 */
class GetPreparedKeyboardButton extends TdFunction
{
    public const string TYPE_NAME = 'getPreparedKeyboardButton';

    public function __construct(
        /**
         * Identifier of the bot that created the button.
         */
        protected int    $botUserId,
        /**
         * Identifier of the prepared button.
         */
        protected string $preparedButtonId,
    ) {}

    public static function fromArray(array $array): GetPreparedKeyboardButton
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
