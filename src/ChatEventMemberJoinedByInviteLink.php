<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A new member joined the chat via an invite link
 */
class ChatEventMemberJoinedByInviteLink extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberJoinedByInviteLink';

    /**
     * Invite link used to join the chat
     *
     * @var ChatInviteLink
     */
    protected ChatInviteLink $inviteLink;

    /**
     * True, if the user has joined the chat using an invite link for a chat folder
     *
     * @var bool
     */
    protected bool $viaChatFolderInviteLink;

    public function __construct(ChatInviteLink $inviteLink, bool $viaChatFolderInviteLink)
    {
        parent::__construct();

        $this->inviteLink = $inviteLink;
        $this->viaChatFolderInviteLink = $viaChatFolderInviteLink;
    }

    public static function fromArray(array $array): ChatEventMemberJoinedByInviteLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invite_link']),
            $array['via_chat_folder_invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink->typeSerialize(),
            'via_chat_folder_invite_link' => $this->viaChatFolderInviteLink,
        ];
    }

    public function getInviteLink(): ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getViaChatFolderInviteLink(): bool
    {
        return $this->viaChatFolderInviteLink;
    }
}
