<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Deletes an invite link for a chat folder
 */
class DeleteChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'deleteChatFolderInviteLink';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    /**
     * Invite link to be deleted
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(int $chatFolderId, string $inviteLink)
    {
        $this->chatFolderId = $chatFolderId;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): DeleteChatFolderInviteLink
    {
        return new static(
            $array['chat_folder_id'],
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'invite_link' => $this->inviteLink,
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }
}
