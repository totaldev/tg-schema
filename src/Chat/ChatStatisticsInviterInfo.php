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
    public const string TYPE_NAME = 'chatStatisticsInviterInfo';

    public function __construct(
        /**
         * Number of new members invited by the user.
         */
        protected int $addedMemberCount,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): ChatStatisticsInviterInfo
    {
        return new static(
            addedMemberCount: $array['added_member_count'],
            userId          : $array['user_id'],
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

    public function setAddedMemberCount(int $value): static
    {
        $this->addedMemberCount = $value;

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
            '@type'              => static::TYPE_NAME,
            'added_member_count' => $this->addedMemberCount,
            'user_id'            => $this->userId,
        ];
    }
}
