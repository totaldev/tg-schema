<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A bot that can be managed by the current bot was created or updated; for bots only.
 */
class UpdateManagedBot extends Update
{
    public const string TYPE_NAME = 'updateManagedBot';

    public function __construct(
        /**
         * Identifier of the created managed bot.
         */
        protected int $botUserId,
        /**
         * Identifier of the user who created the bot.
         */
        protected int $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateManagedBot
    {
        return new static(
            botUserId: $array['bot_user_id'],
            userId   : $array['user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'user_id'     => $this->userId,
        ];
    }
}
