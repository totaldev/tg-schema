<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

/**
 * A URL linking to a user.
 */
class TMeUrlTypeUser extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeUser';

    public function __construct(
        /**
         * Identifier of the user.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TMeUrlTypeUser
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
