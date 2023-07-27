<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Chat\ChatFolder;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits existing chat folder. Returns information about the edited chat folder
 */
class EditChatFolder extends TdFunction
{
    public const TYPE_NAME = 'editChatFolder';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    /**
     * The edited chat folder
     *
     * @var ChatFolder
     */
    protected ChatFolder $folder;

    public function __construct(int $chatFolderId, ChatFolder $folder)
    {
        $this->chatFolderId = $chatFolderId;
        $this->folder = $folder;
    }

    public static function fromArray(array $array): EditChatFolder
    {
        return new static(
            $array['chat_folder_id'],
            TdSchemaRegistry::fromArray($array['folder']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'folder' => $this->folder->typeSerialize(),
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getFolder(): ChatFolder
    {
        return $this->folder;
    }
}
