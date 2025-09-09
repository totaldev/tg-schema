<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The user can't be invited because they were banned by the owner of the call and can be invited back only by the owner of the group call.
 */
class InviteGroupCallParticipantResultUserWasBanned extends InviteGroupCallParticipantResult
{
    public const TYPE_NAME = 'inviteGroupCallParticipantResultUserWasBanned';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteGroupCallParticipantResultUserWasBanned
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
