<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Allow;

use Totaldev\TgSchema\TdFunction;

/**
 * Allows the specified bot to send messages to the user.
 */
class AllowBotToSendMessages extends TdFunction
{
    public const string TYPE_NAME = 'allowBotToSendMessages';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): AllowBotToSendMessages
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
