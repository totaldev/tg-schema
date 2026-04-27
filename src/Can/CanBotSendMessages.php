<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether the specified bot can send messages to the user. Returns a 404 error if can't and the access can be granted by call to allowBotToSendMessages.
 */
class CanBotSendMessages extends TdFunction
{
    public const string TYPE_NAME = 'canBotSendMessages';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): CanBotSendMessages
    {
        return new static(
            botUserId: $array['bot_user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
        ];
    }
}
