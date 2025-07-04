<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the order of chat folders.
 */
class ReorderChatFolders extends TdFunction
{
    public const TYPE_NAME = 'reorderChatFolders';

    public function __construct(
        /**
         * Identifiers of chat folders in the new correct order.
         *
         * @var int[]
         */
        protected array $chatFolderIds,
        /**
         * Position of the main chat list among chat folders, 0-based. Can be non-zero only for Premium users.
         */
        protected int   $mainChatListPosition
    ) {}

    public static function fromArray(array $array): ReorderChatFolders
    {
        return new static(
            $array['chat_folder_ids'],
            $array['main_chat_list_position'],
        );
    }

    public function getChatFolderIds(): array
    {
        return $this->chatFolderIds;
    }

    public function getMainChatListPosition(): int
    {
        return $this->mainChatListPosition;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_folder_ids'         => $this->chatFolderIds,
            'main_chat_list_position' => $this->mainChatListPosition,
        ];
    }
}
