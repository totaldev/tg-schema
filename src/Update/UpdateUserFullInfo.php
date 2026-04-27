<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserFullInfo;

/**
 * Some data in userFullInfo has been changed.
 */
class UpdateUserFullInfo extends Update
{
    public const string TYPE_NAME = 'updateUserFullInfo';

    public function __construct(
        /**
         * New full information about the user.
         */
        protected UserFullInfo $userFullInfo,
        /**
         * User identifier.
         */
        protected int          $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUserFullInfo
    {
        return new static(
            userFullInfo: TdSchemaRegistry::fromArray($array['user_full_info']),
            userId      : $array['user_id'],
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

    public function setUserFullInfo(UserFullInfo $value): static
    {
        $this->userFullInfo = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'user_full_info' => $this->userFullInfo->jsonSerialize(),
            'user_id'        => $this->userId,
        ];
    }
}
