<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new member was accepted to the chat by an administrator.
 */
class ChatEventMemberJoinedByRequest extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMemberJoinedByRequest';

    public function __construct(
        /**
         * User identifier of the chat administrator, approved user join request.
         */
        protected int             $approverUserId,
        /**
         * Invite link used to join the chat; may be null.
         */
        protected ?ChatInviteLink $inviteLink,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberJoinedByRequest
    {
        return new static(
            approverUserId: $array['approver_user_id'],
            inviteLink    : (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
        );
    }

    public function getApproverUserId(): int
    {
        return $this->approverUserId;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function setApproverUserId(int $value): static
    {
        $this->approverUserId = $value;

        return $this;
    }

    public function setInviteLink(?ChatInviteLink $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'approver_user_id' => $this->approverUserId,
            'invite_link'      => (null !== $this->inviteLink ? $this->inviteLink->jsonSerialize() : null),
        ];
    }
}
