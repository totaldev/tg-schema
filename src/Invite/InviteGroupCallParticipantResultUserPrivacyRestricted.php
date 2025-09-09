<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

/**
 * The user can't be invited due to their privacy settings.
 */
class InviteGroupCallParticipantResultUserPrivacyRestricted extends InviteGroupCallParticipantResult
{
    public const TYPE_NAME = 'inviteGroupCallParticipantResultUserPrivacyRestricted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InviteGroupCallParticipantResultUserPrivacyRestricted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
