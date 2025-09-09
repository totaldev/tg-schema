<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The user can't be invited because they are already a participant of the call.
 */
class InviteGroupCallParticipantResultUserAlreadyParticipant extends InviteGroupCallParticipantResult
{
    public const TYPE_NAME = 'inviteGroupCallParticipantResultUserAlreadyParticipant';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteGroupCallParticipantResultUserAlreadyParticipant
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
