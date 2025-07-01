<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatFolderInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of chat folders or a chat folder has changed.
 */
class UpdateChatFolders extends Update
{
    public const TYPE_NAME = 'updateChatFolders';

    public function __construct(
        /**
         * The new list of chat folders.
         *
         * @var ChatFolderInfo[]
         */
        protected array $chatFolders,
        /**
         * Position of the main chat list among chat folders, 0-based.
         */
        protected int   $mainChatListPosition,
        /**
         * True, if folder tags are enabled.
         */
        protected bool  $areTagsEnabled
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatFolders
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_folders']),
            $array['main_chat_list_position'],
            $array['are_tags_enabled'],
        );
    }

    public function getAreTagsEnabled(): bool
    {
        return $this->areTagsEnabled;
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
            '@type'                   => static::TYPE_NAME,
            'chat_folders'            => array_map(static fn($x) => $x->typeSerialize(), $this->chatFolders),
            'main_chat_list_position' => $this->mainChatListPosition,
            'are_tags_enabled'        => $this->areTagsEnabled,
        ];
    }
}
