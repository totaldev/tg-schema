<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns full information about a user by their identifier.
 */
class GetUserFullInfo extends TdFunction
{
    public const TYPE_NAME = 'getUserFullInfo';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): GetUserFullInfo
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
