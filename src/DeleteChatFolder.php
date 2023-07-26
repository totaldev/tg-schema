<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Deletes existing chat folder
 */
class DeleteChatFolder extends TdFunction
{
    public const TYPE_NAME = 'deleteChatFolder';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    /**
     * Identifiers of the chats to leave. The chats must be pinned or always included in the folder
     *
     * @var int[]
     */
    protected array $leaveChatIds;

    public function __construct(int $chatFolderId, array $leaveChatIds)
    {
        $this->chatFolderId = $chatFolderId;
        $this->leaveChatIds = $leaveChatIds;
    }

    public static function fromArray(array $array): DeleteChatFolder
    {
        return new static(
            $array['chat_folder_id'],
            $array['leave_chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'leave_chat_ids' => $this->leaveChatIds,
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getLeaveChatIds(): array
    {
        return $this->leaveChatIds;
    }
}
