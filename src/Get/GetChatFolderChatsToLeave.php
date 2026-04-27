<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns identifiers of pinned or always included chats from a chat folder, which are suggested to be left when the chat folder is deleted.
 */
class GetChatFolderChatsToLeave extends TdFunction
{
    public const string TYPE_NAME = 'getChatFolderChatsToLeave';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int $chatFolderId
    ) {}

    public static function fromArray(array $array): GetChatFolderChatsToLeave
    {
        return new static(
            chatFolderId: $array['chat_folder_id'],
        );
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
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
            'chat_folder_id' => $this->chatFolderId,
        ];
    }
}
