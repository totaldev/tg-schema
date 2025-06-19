<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a folder for user chats.
 */
class ChatFolder extends TdObject
{
    public const TYPE_NAME = 'chatFolder';

    public function __construct(
        /**
         * The name of the folder.
         */
        protected ChatFolderName  $name,
        /**
         * The chosen icon for the chat folder; may be null. If null, use getChatFolderDefaultIconName to get default icon name for the folder.
         */
        protected ?ChatFolderIcon $icon,
        /**
         * The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled. Can't be changed if folder tags are disabled or the current user doesn't have Telegram Premium subscription.
         */
        protected int             $colorId,
        /**
         * True, if at least one link has been created for the folder.
         */
        protected bool            $isShareable,
        /**
         * The chat identifiers of pinned chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
         *
         * @var int[]
         */
        protected array           $pinnedChatIds,
        /**
         * The chat identifiers of always included chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
         *
         * @var int[]
         */
        protected array           $includedChatIds,
        /**
         * The chat identifiers of always excluded chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") always excluded non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium.
         *
         * @var int[]
         */
        protected array           $excludedChatIds,
        /**
         * True, if muted chats need to be excluded.
         */
        protected bool            $excludeMuted,
        /**
         * True, if read chats need to be excluded.
         */
        protected bool            $excludeRead,
        /**
         * True, if archived chats need to be excluded.
         */
        protected bool            $excludeArchived,
        /**
         * True, if contacts need to be included.
         */
        protected bool            $includeContacts,
        /**
         * True, if non-contact users need to be included.
         */
        protected bool            $includeNonContacts,
        /**
         * True, if bots need to be included.
         */
        protected bool            $includeBots,
        /**
         * True, if basic groups and supergroups need to be included.
         */
        protected bool            $includeGroups,
        /**
         * True, if channels need to be included.
         */
        protected bool            $includeChannels,
    ) {}

    public static function fromArray(array $array): ChatFolder
    {
        return new static(
            TdSchemaRegistry::fromArray($array['name']),
            isset($array['icon']) ? TdSchemaRegistry::fromArray($array['icon']) : null,
            $array['color_id'],
            $array['is_shareable'],
            $array['pinned_chat_ids'],
            $array['included_chat_ids'],
            $array['excluded_chat_ids'],
            $array['exclude_muted'],
            $array['exclude_read'],
            $array['exclude_archived'],
            $array['include_contacts'],
            $array['include_non_contacts'],
            $array['include_bots'],
            $array['include_groups'],
            $array['include_channels'],
        );
    }

    public function getColorId(): int
    {
        return $this->colorId;
    }

    public function getExcludeArchived(): bool
    {
        return $this->excludeArchived;
    }

    public function getExcludeMuted(): bool
    {
        return $this->excludeMuted;
    }

    public function getExcludeRead(): bool
    {
        return $this->excludeRead;
    }

    public function getExcludedChatIds(): array
    {
        return $this->excludedChatIds;
    }

    public function getIcon(): ?ChatFolderIcon
    {
        return $this->icon;
    }

    public function getIncludeBots(): bool
    {
        return $this->includeBots;
    }

    public function getIncludeChannels(): bool
    {
        return $this->includeChannels;
    }

    public function getIncludeContacts(): bool
    {
        return $this->includeContacts;
    }

    public function getIncludeGroups(): bool
    {
        return $this->includeGroups;
    }

    public function getIncludeNonContacts(): bool
    {
        return $this->includeNonContacts;
    }

    public function getIncludedChatIds(): array
    {
        return $this->includedChatIds;
    }

    public function getIsShareable(): bool
    {
        return $this->isShareable;
    }

    public function getName(): ChatFolderName
    {
        return $this->name;
    }

    public function getPinnedChatIds(): array
    {
        return $this->pinnedChatIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'name'                 => $this->name->typeSerialize(),
            'icon'                 => (isset($this->icon) ? $this->icon : null),
            'color_id'             => $this->colorId,
            'is_shareable'         => $this->isShareable,
            'pinned_chat_ids'      => $this->pinnedChatIds,
            'included_chat_ids'    => $this->includedChatIds,
            'excluded_chat_ids'    => $this->excludedChatIds,
            'exclude_muted'        => $this->excludeMuted,
            'exclude_read'         => $this->excludeRead,
            'exclude_archived'     => $this->excludeArchived,
            'include_contacts'     => $this->includeContacts,
            'include_non_contacts' => $this->includeNonContacts,
            'include_bots'         => $this->includeBots,
            'include_groups'       => $this->includeGroups,
            'include_channels'     => $this->includeChannels,
        ];
    }
}
