<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a user by their identifier. This is an offline request if the current user is not a bot.
 */
class GetUser extends TdFunction
{
    public const TYPE_NAME = 'getUser';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): GetUser
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
