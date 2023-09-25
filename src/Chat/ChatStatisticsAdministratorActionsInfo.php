<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains statistics about administrator actions done by a user
 */
class ChatStatisticsAdministratorActionsInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsAdministratorActionsInfo';

    /**
     * Number of users banned by the administrator
     *
     * @var int
     */
    protected int $bannedUserCount;

    /**
     * Number of messages deleted by the administrator
     *
     * @var int
     */
    protected int $deletedMessageCount;

    /**
     * Number of users restricted by the administrator
     *
     * @var int
     */
    protected int $restrictedUserCount;

    /**
     * Administrator user identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, int $deletedMessageCount, int $bannedUserCount, int $restrictedUserCount)
    {
        $this->userId = $userId;
        $this->deletedMessageCount = $deletedMessageCount;
        $this->bannedUserCount = $bannedUserCount;
        $this->restrictedUserCount = $restrictedUserCount;
    }

    public static function fromArray(array $array): ChatStatisticsAdministratorActionsInfo
    {
        return new static(
            $array['user_id'],
            $array['deleted_message_count'],
            $array['banned_user_count'],
            $array['restricted_user_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'deleted_message_count' => $this->deletedMessageCount,
            'banned_user_count' => $this->bannedUserCount,
            'restricted_user_count' => $this->restrictedUserCount,
        ];
    }
}
