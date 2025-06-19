<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the total number of Telegram Stars received by the current user for paid messages from the given user.
 */
class GetPaidMessageRevenue extends TdFunction
{
    public const TYPE_NAME = 'getPaidMessageRevenue';

    public function __construct(
        /**
         * Identifier of the user.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): GetPaidMessageRevenue
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
