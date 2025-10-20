<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The call was ended because it has been upgraded to a group call.
 */
class CallDiscardReasonUpgradeToGroupCall extends CallDiscardReason
{
    public const TYPE_NAME = 'callDiscardReasonUpgradeToGroupCall';

    public function __construct(
        /**
         * Invite link for the group call.
         */
        protected string $inviteLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallDiscardReasonUpgradeToGroupCall
    {
        return new static(
            $array['invite_link'],
        );
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }
}
