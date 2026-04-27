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
    public const string TYPE_NAME = 'chatBoostSourceGiftCode';

    public function __construct(
        /**
         * The created Telegram Premium gift code, which is known only if this is a gift code for the current user, or it has already been claimed.
         */
        protected string $giftCode,
        /**
         * Identifier of a user, for which the gift code was created.
         */
        protected int    $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatBoostSourceGiftCode
    {
        return new static(
            giftCode: $array['gift_code'],
            userId  : $array['user_id'],
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

    public function setGiftCode(string $value): static
    {
        $this->giftCode = $value;

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
            '@type'     => static::TYPE_NAME,
            'gift_code' => $this->giftCode,
            'user_id'   => $this->userId,
        ];
    }
}
