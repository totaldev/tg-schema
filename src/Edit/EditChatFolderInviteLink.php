<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Edits an invite link for a chat folder.
 */
class EditChatFolderInviteLink extends TdFunction
{
    public const string TYPE_NAME = 'editChatFolderInviteLink';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int    $chatFolderId,
        /**
         * New identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link editing.
         *
         * @var int[]
         */
        protected array  $chatIds,
        /**
         * Invite link to be edited.
         */
        protected string $inviteLink,
        /**
         * New name of the link; 0-32 characters.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): EditChatFolderInviteLink
    {
        return new static(
            chatFolderId: $array['chat_folder_id'],
            chatIds     : $array['chat_ids'],
            inviteLink  : $array['invite_link'],
            name        : $array['name'],
        );
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setChatFolderId(int $value): static
    {
        $this->chatFolderId = $value;

        return $this;
    }

    public function setChatIds(array $value): static
    {
        $this->chatIds = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'chat_ids'       => $this->chatIds,
            'invite_link'    => $this->inviteLink,
            'name'           => $this->name,
        ];
    }
}
