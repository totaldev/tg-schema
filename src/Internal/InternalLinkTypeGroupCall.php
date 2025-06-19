<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a group call that isn't bound to a chat. Use getGroupCallParticipants to get the list of group call participants and show them on the
 * join group call screen. Call joinGroupCall with the given invite_link to join the call.
 */
class InternalLinkTypeGroupCall extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeGroupCall';

    public function __construct(
        /**
         * Internal representation of the invite link.
         */
        protected string $inviteLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeGroupCall
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
