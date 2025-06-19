<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ban;

use Totaldev\TgSchema\TdFunction;

/**
 * Bans users from a group call not bound to a chat; requires groupCall.is_owned. Only the owner of the group call can invite the banned users back.
 */
class BanGroupCallParticipants extends TdFunction
{
    public const TYPE_NAME = 'banGroupCallParticipants';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int   $groupCallId,
        /**
         * Identifiers of group call participants to ban; identifiers of unknown users from the update updateGroupCallParticipants can be also passed to the method.
         *
         * @var int[]
         */
        protected array $userIds
    ) {}

    public static function fromArray(array $array): BanGroupCallParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['user_ids'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'user_ids'      => $this->userIds,
        ];
    }
}
