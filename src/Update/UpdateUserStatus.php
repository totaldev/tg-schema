<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\User\UserStatus;

/**
 * The user went online or offline.
 */
class UpdateUserStatus extends Update
{
    public const string TYPE_NAME = 'updateUserStatus';

    public function __construct(
        /**
         * New status of the user.
         */
        protected UserStatus $status,
        /**
         * User identifier.
         */
        protected int        $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUserStatus
    {
        return new static(
            status: TdSchemaRegistry::fromArray($array['status']),
            userId: $array['user_id'],
        );
    }

    public function getStatus(): UserStatus
    {
        return $this->status;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setStatus(UserStatus $value): static
    {
        $this->status = $value;

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
            '@type'   => static::TYPE_NAME,
            'status'  => $this->status->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
