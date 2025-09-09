<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains statistics about number of new members invited by a user.
 */
class ChatStatisticsInviterInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsInviterInfo';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId,
        /**
         * Number of new members invited by the user.
         */
        protected int $addedMemberCount,
    ) {}

    public static function fromArray(array $array): ChatStatisticsInviterInfo
    {
        return new static(
            $array['user_id'],
            $array['added_member_count'],
        );
    }

    public function getAddedMemberCount(): int
    {
        return $this->addedMemberCount;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'user_id'            => $this->userId,
            'added_member_count' => $this->addedMemberCount,
        ];
    }
}
