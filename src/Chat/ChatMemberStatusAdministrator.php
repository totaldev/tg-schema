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
    public const TYPE_NAME = 'chatMemberStatusAdministrator';

    public function __construct(
        /**
         * A custom title of the administrator; 0-16 characters without emoji; applicable to supergroups only.
         */
        protected string                  $customTitle,
        /**
         * True, if the current user can edit the administrator privileges for the called user.
         */
        protected bool                    $canBeEdited,
        /**
         * Rights of the administrator.
         */
        protected ChatAdministratorRights $rights
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatMemberStatusAdministrator
    {
        return new static(
            $array['custom_title'],
            $array['can_be_edited'],
            TdSchemaRegistry::fromArray($array['rights']),
        );
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function getRights(): ChatAdministratorRights
    {
        return $this->rights;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'custom_title'  => $this->customTitle,
            'can_be_edited' => $this->canBeEdited,
            'rights'        => $this->rights->typeSerialize(),
        ];
    }
}
