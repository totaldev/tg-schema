<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes the business bot that is connected to the current user account.
 */
class DeleteBusinessConnectedBot extends TdFunction
{
    public const string TYPE_NAME = 'deleteBusinessConnectedBot';

    public function __construct(
        /**
         * Unique user identifier for the bot.
         */
        protected int $botUserId
    ) {}

    public static function fromArray(array $array): DeleteBusinessConnectedBot
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
