<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A list of chats added to a chat folder
 */
class ChatListFolder extends ChatList
{
    public const TYPE_NAME = 'chatListFolder';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    public function __construct(int $chatFolderId)
    {
        parent::__construct();

        $this->chatFolderId = $chatFolderId;
    }

    public static function fromArray(array $array): ChatListFolder
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
