<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * The user is offline.
 */
class UserStatusOffline extends UserStatus
{
    public const TYPE_NAME = 'userStatusOffline';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the user was last online.
         */
        protected int $wasOnline
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusOffline
    {
        return new static(
            $array['was_online'],
        );
    }

    public function getWasOnline(): int
    {
        return $this->wasOnline;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'was_online' => $this->wasOnline,
        ];
    }
}
