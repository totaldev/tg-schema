<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available options for Telegram Stars gifting.
 */
class GetStarGiftPaymentOptions extends TdFunction
{
    public const string TYPE_NAME = 'getStarGiftPaymentOptions';

    public function __construct(
        /**
         * Identifier of the user that will receive Telegram Stars; pass 0 to get options for an unspecified user.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): GetStarGiftPaymentOptions
    {
        return new static(
            userId: $array['user_id'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }
}
