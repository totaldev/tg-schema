<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * The user is online.
 */
class UserStatusOnline extends UserStatus
{
    public const TYPE_NAME = 'userStatusOnline';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the user's online status will expire.
         */
        protected int $expires
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusOnline
    {
        return new static(
            $array['expires'],
        );
    }

    public function getExpires(): int
    {
        return $this->expires;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'expires' => $this->expires,
        ];
    }
}
