<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * User rights changed in a chat; for bots only
 */
class UpdateChatMember extends Update
{
    public const TYPE_NAME = 'updateChatMember';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the user, changing the rights
     *
     * @var int
     */
    protected int $actorUserId;

    /**
     * Point in time (Unix timestamp) when the user rights was changed
     *
     * @var int
     */
    protected int $date;

    /**
     * If user has joined the chat using an invite link, the invite link; may be null
     *
     * @var ChatInviteLink|null
     */
    protected ?ChatInviteLink $inviteLink;

    /**
     * True, if the user has joined the chat using an invite link for a chat folder
     *
     * @var bool
     */
    protected bool $viaChatFolderInviteLink;

    /**
     * Previous chat member
     *
     * @var ChatMember
     */
    protected ChatMember $oldChatMember;

    /**
     * New chat member
     *
     * @var ChatMember
     */
    protected ChatMember $newChatMember;

    public function __construct(
        int $chatId,
        int $actorUserId,
        int $date,
        ?ChatInviteLink $inviteLink,
        bool $viaChatFolderInviteLink,
        ChatMember $oldChatMember,
        ChatMember $newChatMember
    ) {
        parent::__construct();

        $this->chatId = $chatId;
        $this->actorUserId = $actorUserId;
        $this->date = $date;
        $this->inviteLink = $inviteLink;
        $this->viaChatFolderInviteLink = $viaChatFolderInviteLink;
        $this->oldChatMember = $oldChatMember;
        $this->newChatMember = $newChatMember;
    }

    public static function fromArray(array $array): UpdateChatMember
    {
        return new static(
            $array['chat_id'],
            $array['actor_user_id'],
            $array['date'],
            (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            $array['via_chat_folder_invite_link'],
            TdSchemaRegistry::fromArray($array['old_chat_member']),
            TdSchemaRegistry::fromArray($array['new_chat_member']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'actor_user_id' => $this->actorUserId,
            'date' => $this->date,
            'invite_link' => (isset($this->inviteLink) ? $this->inviteLink : null),
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
            'old_chat_member' => $this->oldChatMember->typeSerialize(),
            'new_chat_member' => $this->newChatMember->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getActorUserId(): int
    {
        return $this->actorUserId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }

    public function getOldChatMember(): ChatMember
    {
        return $this->oldChatMember;
    }

    public function getNewChatMember(): ChatMember
    {
        return $this->newChatMember;
    }
}
