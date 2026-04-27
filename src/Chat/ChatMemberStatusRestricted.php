<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user is under certain restrictions in the chat. Not supported in basic groups and channels.
 */
class ChatMemberStatusRestricted extends ChatMemberStatus
{
    public const string TYPE_NAME = 'chatMemberStatusRestricted';

    public function __construct(
        /**
         * True, if the user is a member of the chat.
         */
        protected bool            $isMember,
        /**
         * User permissions in the chat.
         */
        protected ChatPermissions $permissions,
        /**
         * Point in time (Unix timestamp) when restrictions will be lifted from the user; 0 if never. If the user is restricted for more than 366 days or for less than 30 seconds from the current time, the user is considered to be restricted forever.
         */
        protected int             $restrictedUntilDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusRestricted
    {
        return new static(
            isMember           : $array['is_member'],
            permissions        : TdSchemaRegistry::fromArray($array['permissions']),
            restrictedUntilDate: $array['restricted_until_date'],
        );
    }

    public function getIsMember(): bool
    {
        return $this->isMember;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    public function getRestrictedUntilDate(): int
    {
        return $this->restrictedUntilDate;
    }

    public function setIsMember(bool $value): static
    {
        $this->isMember = $value;

        return $this;
    }

    public function setPermissions(ChatPermissions $value): static
    {
        $this->permissions = $value;

        return $this;
    }

    public function setRestrictedUntilDate(int $value): static
    {
        $this->restrictedUntilDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'is_member'             => $this->isMember,
            'permissions'           => $this->permissions->jsonSerialize(),
            'restricted_until_date' => $this->restrictedUntilDate,
        ];
    }
}
