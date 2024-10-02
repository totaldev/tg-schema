<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A list of chats added to a chat folder.
 */
class ChatListFolder extends ChatList
{
    public const TYPE_NAME = 'chatListFolder';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int $chatFolderId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatListFolder
    {
        return new static(
            $array['chat_folder_id'],
        );
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
        ];
    }
}
