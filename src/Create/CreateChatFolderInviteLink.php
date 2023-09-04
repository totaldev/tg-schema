<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new invite link for a chat folder. A link can be created for a chat folder if it has only pinned and included chats
 */
class CreateChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'createChatFolderInviteLink';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    /**
     * Name of the link; 0-32 characters
     *
     * @var string
     */
    protected string $name;

    /**
     * Identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link creation
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(int $chatFolderId, string $name, array $chatIds)
    {
        $this->chatFolderId = $chatFolderId;
        $this->name = $name;
        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): CreateChatFolderInviteLink
    {
        return new static(
            $array['chat_folder_id'],
            $array['name'],
            $array['chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'name' => $this->name,
            'chat_ids' => $this->chatIds,
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
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
