<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains statistics about administrator actions done by a user.
 */
class ChatStatisticsAdministratorActionsInfo extends TdObject
{
    public const string TYPE_NAME = 'chatStatisticsAdministratorActionsInfo';

    public function __construct(
        /**
         * Number of users banned by the administrator.
         */
        protected int $bannedUserCount,
        /**
         * Number of messages deleted by the administrator.
         */
        protected int $deletedMessageCount,
        /**
         * Number of users restricted by the administrator.
         */
        protected int $restrictedUserCount,
        /**
         * Administrator user identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): ChatStatisticsAdministratorActionsInfo
    {
        return new static(
            bannedUserCount    : $array['banned_user_count'],
            deletedMessageCount: $array['deleted_message_count'],
            restrictedUserCount: $array['restricted_user_count'],
            userId             : $array['user_id'],
        );
    }

    public function getBannedUserCount(): int
    {
        return $this->bannedUserCount;
    }

    public function getDeletedMessageCount(): int
    {
        return $this->deletedMessageCount;
    }

    public function getRestrictedUserCount(): int
    {
        return $this->restrictedUserCount;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setBannedUserCount(int $value): static
    {
        $this->bannedUserCount = $value;

        return $this;
    }

    public function setDeletedMessageCount(int $value): static
    {
        $this->deletedMessageCount = $value;

        return $this;
    }

    public function setRestrictedUserCount(int $value): static
    {
        $this->restrictedUserCount = $value;

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
            '@type'                 => static::TYPE_NAME,
            'banned_user_count'     => $this->bannedUserCount,
            'deleted_message_count' => $this->deletedMessageCount,
            'restricted_user_count' => $this->restrictedUserCount,
            'user_id'               => $this->userId,
        ];
    }
}
