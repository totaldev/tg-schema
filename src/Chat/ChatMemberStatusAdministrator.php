<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user is a member of the chat and has some additional privileges. In basic groups, administrators can edit and delete messages sent by others, add new members, ban unprivileged members, and manage video chats. In supergroups and channels, there are more detailed options for administrator privileges
 */
class ChatMemberStatusAdministrator extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusAdministrator';

    /**
     * A custom title of the administrator; 0-16 characters without emojis; applicable to supergroups only
     *
     * @var string
     */
    protected string $customTitle;

    /**
     * True, if the current user can edit the administrator privileges for the called user
     *
     * @var bool
     */
    protected bool $canBeEdited;

    /**
     * Rights of the administrator
     *
     * @var ChatAdministratorRights
     */
    protected ChatAdministratorRights $rights;

    public function __construct(string $customTitle, bool $canBeEdited, ChatAdministratorRights $rights)
    {
        parent::__construct();

        $this->customTitle = $customTitle;
        $this->canBeEdited = $canBeEdited;
        $this->rights = $rights;
    }

    public static function fromArray(array $array): ChatMemberStatusAdministrator
    {
        return new static(
            $array['custom_title'],
            $array['can_be_edited'],
            TdSchemaRegistry::fromArray($array['rights']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_title' => $this->customTitle,
            'can_be_edited' => $this->canBeEdited,
            'rights' => $this->rights->typeSerialize(),
        ];
    }

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getRights(): ChatAdministratorRights
    {
        return $this->rights;
    }
}
