<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes an invite link for a chat folder.
 */
class DeleteChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'deleteChatFolderInviteLink';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int    $chatFolderId,
        /**
         * Invite link to be deleted.
         */
        protected string $inviteLink,
    ) {}

    public static function fromArray(array $array): DeleteChatFolderInviteLink
    {
        return new static(
            $array['chat_folder_id'],
            $array['invite_link'],
        );
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'invite_link'    => $this->inviteLink,
        ];
    }
}
