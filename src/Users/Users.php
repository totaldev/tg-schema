<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Users;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a list of users.
 */
class Users extends TdObject
{
    public const string TYPE_NAME = 'users';

    public function __construct(
        /**
         * Approximate total number of users found.
         */
        protected int   $totalCount,
        /**
         * A list of user identifiers.
         *
         * @var int[]
         */
        protected array $userIds,
    ) {}

    public static function fromArray(array $array): Users
    {
        return new static(
            totalCount: $array['total_count'],
            userIds   : $array['user_ids'],
        );
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function setUserIds(array $value): static
    {
        $this->userIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'user_ids'    => $this->userIds,
        ];
    }
}
