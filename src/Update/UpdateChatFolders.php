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
    public const string TYPE_NAME = 'updateChatFolders';

    public function __construct(
        /**
         * True, if folder tags are enabled.
         */
        protected bool  $areTagsEnabled,
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
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatFolders
    {
        return new static(
            areTagsEnabled      : $array['are_tags_enabled'],
            chatFolders         : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_folders']),
            mainChatListPosition: $array['main_chat_list_position'],
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

    public function setAreTagsEnabled(bool $value): static
    {
        $this->areTagsEnabled = $value;

        return $this;
    }

    public function setChatFolders(array $value): static
    {
        $this->chatFolders = $value;

        return $this;
    }

    public function setMainChatListPosition(int $value): static
    {
        $this->mainChatListPosition = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'are_tags_enabled'        => $this->areTagsEnabled,
            'chat_folders'            => array_map(static fn($x) => $x->jsonSerialize(), $this->chatFolders),
            'main_chat_list_position' => $this->mainChatListPosition,
        ];
    }
}
