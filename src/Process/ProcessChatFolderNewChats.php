<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;

/**
 * Process new chats added to a shareable chat folder by its owner.
 */
class ProcessChatFolderNewChats extends TdFunction
{
    public const string TYPE_NAME = 'processChatFolderNewChats';

    public function __construct(
        /**
         * Identifiers of the new chats, which are added to the chat folder. The chats are automatically joined if they aren't joined yet.
         *
         * @var int[]
         */
        protected array $addedChatIds,
        /**
         * Chat folder identifier.
         */
        protected int   $chatFolderId,
    ) {}

    public static function fromArray(array $array): ProcessChatFolderNewChats
    {
        return new static(
            addedChatIds: $array['added_chat_ids'],
            chatFolderId: $array['chat_folder_id'],
        );
    }

    public function getAddedChatIds(): array
    {
        return $this->addedChatIds;
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function setAddedChatIds(array $value): static
    {
        $this->addedChatIds = $value;

        return $this;
    }

    public function setChatFolderId(int $value): static
    {
        $this->chatFolderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'added_chat_ids' => $this->addedChatIds,
            'chat_folder_id' => $this->chatFolderId,
        ];
    }
}
