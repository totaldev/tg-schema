<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Users;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a list of users
 */
class Users extends TdObject
{
    public const TYPE_NAME = 'users';

    /**
     * Approximate total number of users found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * A list of user identifiers
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(int $totalCount, array $userIds)
    {
        $this->totalCount = $totalCount;
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): Users
    {
        return new static(
            $array['total_count'],
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'user_ids' => $this->userIds,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
