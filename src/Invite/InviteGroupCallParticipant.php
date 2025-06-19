<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

use Totaldev\TgSchema\TdFunction;

/**
 * Invites a user to an active group call; for group calls not bound to a chat only. Sends a service message of the type messageGroupCall. The group call can
 * have at most getOption("group_call_participant_count_max") participants.
 */
class InviteGroupCallParticipant extends TdFunction
{
    public const TYPE_NAME = 'inviteGroupCallParticipant';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * User identifier.
         */
        protected int  $userId,
        /**
         * Pass true if the group call is a video call.
         */
        protected bool $isVideo
    ) {}

    public static function fromArray(array $array): InviteGroupCallParticipant
    {
        return new static(
            $array['group_call_id'],
            $array['user_id'],
            $array['is_video'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'user_id'       => $this->userId,
            'is_video'      => $this->isVideo,
        ];
    }
}
