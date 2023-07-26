<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Returns new chats added to a shareable chat folder by its owner. The method must be called at most once in getOption("chat_folder_new_chats_update_period") for the given chat folder
 */
class GetChatFolderNewChats extends TdFunction
{
    public const TYPE_NAME = 'getChatFolderNewChats';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    public function __construct(int $chatFolderId)
    {
        $this->chatFolderId = $chatFolderId;
    }

    public static function fromArray(array $array): GetChatFolderNewChats
    {
        return new static(
            $array['chat_folder_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }
}
