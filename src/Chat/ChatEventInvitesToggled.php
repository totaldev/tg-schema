<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The can_invite_users permission of a supergroup chat was toggled.
 */
class ChatEventInvitesToggled extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventInvitesToggled';

    public function __construct(
        /**
         * New value of can_invite_users permission.
         */
        protected bool $canInviteUsers
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventInvitesToggled
    {
        return new static(
            canInviteUsers: $array['can_invite_users'],
        );
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function setCanInviteUsers(bool $value): static
    {
        $this->canInviteUsers = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'can_invite_users' => $this->canInviteUsers,
        ];
    }
}
