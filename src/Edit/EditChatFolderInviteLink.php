<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits an invite link for a chat folder
 */
class EditChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'editChatFolderInviteLink';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    /**
     * Invite link to be edited
     *
     * @var string
     */
    protected string $inviteLink;

    /**
     * New name of the link; 0-32 characters
     *
     * @var string
     */
    protected string $name;

    /**
     * New identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link editing
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(int $chatFolderId, string $inviteLink, string $name, array $chatIds)
    {
        $this->chatFolderId = $chatFolderId;
        $this->inviteLink = $inviteLink;
        $this->name = $name;
        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): EditChatFolderInviteLink
    {
        return new static(
            $array['chat_folder_id'],
            $array['invite_link'],
            $array['name'],
            $array['chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'invite_link' => $this->inviteLink,
            'name' => $this->name,
            'chat_ids' => $this->chatIds,
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }
}
