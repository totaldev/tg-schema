<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about pending join requests for a chat.
 */
class ChatJoinRequestsInfo extends TdObject
{
    public const string TYPE_NAME = 'chatJoinRequestsInfo';

    public function __construct(
        /**
         * Total number of pending join requests.
         */
        protected int   $totalCount,
        /**
         * Identifiers of at most 3 users sent the newest pending join requests.
         *
         * @var int[]
         */
        protected array $userIds,
    ) {}

    public static function fromArray(array $array): ChatJoinRequestsInfo
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
