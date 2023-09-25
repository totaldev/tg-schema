<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns identifiers of chats from a chat folder, suitable for adding to a chat folder invite link
 */
class GetChatsForChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'getChatsForChatFolderInviteLink';

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

    public static function fromArray(array $array): GetChatsForChatFolderInviteLink
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
