<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Process new chats added to a shareable chat folder by its owner
 */
class ProcessChatFolderNewChats extends TdFunction
{
    public const TYPE_NAME = 'processChatFolderNewChats';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    /**
     * Identifiers of the new chats, which are added to the chat folder. The chats are automatically joined if they aren't joined yet
     *
     * @var int[]
     */
    protected array $addedChatIds;

    public function __construct(int $chatFolderId, array $addedChatIds)
    {
        $this->chatFolderId = $chatFolderId;
        $this->addedChatIds = $addedChatIds;
    }

    public static function fromArray(array $array): ProcessChatFolderNewChats
    {
        return new static(
            $array['chat_folder_id'],
            $array['added_chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'added_chat_ids' => $this->addedChatIds,
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getAddedChatIds(): array
    {
        return $this->addedChatIds;
    }
}
