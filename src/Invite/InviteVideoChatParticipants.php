<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

use Totaldev\TgSchema\TdFunction;

/**
 * Invites users to an active video chat. Sends a service message of the type messageInviteVideoChatParticipants to the chat bound to the group call.
 */
class InviteVideoChatParticipants extends TdFunction
{
    public const TYPE_NAME = 'inviteVideoChatParticipants';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int   $groupCallId,
        /**
         * User identifiers. At most 10 users can be invited simultaneously.
         *
         * @var int[]
         */
        protected array $userIds
    ) {}

    public static function fromArray(array $array): InviteVideoChatParticipants
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
