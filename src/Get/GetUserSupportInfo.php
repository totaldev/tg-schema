<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns support information for the given user; for Telegram support only.
 */
class GetUserSupportInfo extends TdFunction
{
    public const TYPE_NAME = 'getUserSupportInfo';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): GetUserSupportInfo
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
