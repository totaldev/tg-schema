<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A user with Telegram Premium subscription or gifted Telegram Premium boosted the chat.
 */
class ChatBoostSourcePremium extends ChatBoostSource
{
    public const TYPE_NAME = 'chatBoostSourcePremium';

    public function __construct(
        /**
         * Identifier of the user.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatBoostSourcePremium
    {
        return new static(
            $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
