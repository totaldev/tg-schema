<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user is a member of the chat and has some additional privileges. In basic groups, administrators can edit and delete messages sent by others, add new
 * members, ban unprivileged members, and manage video chats. In supergroups and channels, there are more detailed options for administrator privileges.
 */
class ChatMemberStatusAdministrator extends ChatMemberStatus
{
    public const string TYPE_NAME = 'chatMemberStatusAdministrator';

    public function __construct(
        /**
         * True, if the current user can edit the administrator privileges for the called user.
         */
        protected bool                    $canBeEdited,
        /**
         * Rights of the administrator.
         */
        protected ChatAdministratorRights $rights,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusAdministrator
    {
        return new static(
            canBeEdited: $array['can_be_edited'],
            rights     : TdSchemaRegistry::fromArray($array['rights']),
        );
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getRights(): ChatAdministratorRights
    {
        return $this->rights;
    }

    public function setCanBeEdited(bool $value): static
    {
        $this->canBeEdited = $value;

        return $this;
    }

    public function setRights(ChatAdministratorRights $value): static
    {
        $this->rights = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'can_be_edited' => $this->canBeEdited,
            'rights'        => $this->rights->jsonSerialize(),
        ];
    }
}
