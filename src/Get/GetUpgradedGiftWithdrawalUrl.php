<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a URL for upgraded gift withdrawal in the TON blockchain as an NFT; requires owner privileges for gifts owned by a chat.
 */
class GetUpgradedGiftWithdrawalUrl extends TdFunction
{
    public const TYPE_NAME = 'getUpgradedGiftWithdrawalUrl';

    public function __construct(
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId,
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password
    ) {}

    public static function fromArray(array $array): GetUpgradedGiftWithdrawalUrl
    {
        return new static(
            $array['received_gift_id'],
            $array['password'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'received_gift_id' => $this->receivedGiftId,
            'password'         => $this->password,
        ];
    }
}
