<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserFullInfo;

/**
 * Some data in userFullInfo has been changed
 */
class UpdateUserFullInfo extends Update
{
    public const TYPE_NAME = 'updateUserFullInfo';

    /**
     * New full information about the user
     *
     * @var UserFullInfo
     */
    protected UserFullInfo $userFullInfo;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, UserFullInfo $userFullInfo)
    {
        parent::__construct();

        $this->userId = $userId;
        $this->userFullInfo = $userFullInfo;
    }

    public static function fromArray(array $array): UpdateUserFullInfo
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['user_full_info']),
        );
    }

    public function getUserFullInfo(): UserFullInfo
    {
        return $this->userFullInfo;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'user_full_info' => $this->userFullInfo->typeSerialize(),
        ];
    }
}
