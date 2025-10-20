<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat created a Telegram Premium gift code for a user.
 */
class ChatBoostSourceGiftCode extends ChatBoostSource
{
    public const TYPE_NAME = 'chatBoostSourceGiftCode';

    public function __construct(
        /**
         * Identifier of a user, for which the gift code was created.
         */
        protected int    $userId,
        /**
         * The created Telegram Premium gift code, which is known only if this is a gift code for the current user, or it has already been claimed.
         */
        protected string $giftCode,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatBoostSourceGiftCode
    {
        return new static(
            $array['user_id'],
            $array['gift_code'],
        );
    }

    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'user_id'   => $this->userId,
            'gift_code' => $this->giftCode,
        ];
    }
}
