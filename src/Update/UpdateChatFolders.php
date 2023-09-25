<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatFolderInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of chat folders or a chat folder has changed
 */
class UpdateChatFolders extends Update
{
    public const TYPE_NAME = 'updateChatFolders';

    /**
     * The new list of chat folders
     *
     * @var ChatFolderInfo[]
     */
    protected array $chatFolders;

    /**
     * Position of the main chat list among chat folders, 0-based
     *
     * @var int
     */
    protected int $mainChatListPosition;

    public function __construct(array $chatFolders, int $mainChatListPosition)
    {
        parent::__construct();

        $this->chatFolders = $chatFolders;
        $this->mainChatListPosition = $mainChatListPosition;
    }

    public static function fromArray(array $array): UpdateChatFolders
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_folders']),
            $array['main_chat_list_position'],
        );
    }

    public function getChatFolders(): array
    {
        return $this->chatFolders;
    }

    public function getMainChatListPosition(): int
    {
        return $this->mainChatListPosition;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->chatFolders),
            'main_chat_list_position' => $this->mainChatListPosition,
        ];
    }
}
