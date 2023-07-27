<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a folder for user chats
 */
class ChatFolder extends TdObject
{
    public const TYPE_NAME = 'chatFolder';

    /**
     * The title of the folder; 1-12 characters without line feeds
     *
     * @var string
     */
    protected string $title;

    /**
     * The chosen icon for the chat folder; may be null. If null, use getChatFolderDefaultIconName to get default icon name for the folder
     *
     * @var ChatFolderIcon|null
     */
    protected ?ChatFolderIcon $icon;

    /**
     * True, if at least one link has been created for the folder
     *
     * @var bool
     */
    protected bool $isShareable;

    /**
     * The chat identifiers of pinned chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium
     *
     * @var int[]
     */
    protected array $pinnedChatIds;

    /**
     * The chat identifiers of always included chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") pinned and always included non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium
     *
     * @var int[]
     */
    protected array $includedChatIds;

    /**
     * The chat identifiers of always excluded chats in the folder. There can be up to getOption("chat_folder_chosen_chat_count_max") always excluded non-secret chats and the same number of secret chats, but the limit can be increased with Telegram Premium
     *
     * @var int[]
     */
    protected array $excludedChatIds;

    /**
     * True, if muted chats need to be excluded
     *
     * @var bool
     */
    protected bool $excludeMuted;

    /**
     * True, if read chats need to be excluded
     *
     * @var bool
     */
    protected bool $excludeRead;

    /**
     * True, if archived chats need to be excluded
     *
     * @var bool
     */
    protected bool $excludeArchived;

    /**
     * True, if contacts need to be included
     *
     * @var bool
     */
    protected bool $includeContacts;

    /**
     * True, if non-contact users need to be included
     *
     * @var bool
     */
    protected bool $includeNonContacts;

    /**
     * True, if bots need to be included
     *
     * @var bool
     */
    protected bool $includeBots;

    /**
     * True, if basic groups and supergroups need to be included
     *
     * @var bool
     */
    protected bool $includeGroups;

    /**
     * True, if channels need to be included
     *
     * @var bool
     */
    protected bool $includeChannels;

    public function __construct(
        string $title,
        ?ChatFolderIcon $icon,
        bool $isShareable,
        array $pinnedChatIds,
        array $includedChatIds,
        array $excludedChatIds,
        bool $excludeMuted,
        bool $excludeRead,
        bool $excludeArchived,
        bool $includeContacts,
        bool $includeNonContacts,
        bool $includeBots,
        bool $includeGroups,
        bool $includeChannels,
    ) {
        $this->title = $title;
        $this->icon = $icon;
        $this->isShareable = $isShareable;
        $this->pinnedChatIds = $pinnedChatIds;
        $this->includedChatIds = $includedChatIds;
        $this->excludedChatIds = $excludedChatIds;
        $this->excludeMuted = $excludeMuted;
        $this->excludeRead = $excludeRead;
        $this->excludeArchived = $excludeArchived;
        $this->includeContacts = $includeContacts;
        $this->includeNonContacts = $includeNonContacts;
        $this->includeBots = $includeBots;
        $this->includeGroups = $includeGroups;
        $this->includeChannels = $includeChannels;
    }

    public static function fromArray(array $array): ChatFolder
    {
        return new static(
            $array['title'],
            (isset($array['icon']) ? TdSchemaRegistry::fromArray($array['icon']) : null),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'icon' => (isset($this->icon) ? $this->icon : null),
            'is_shareable' => $this->isShareable,
            'pinned_chat_ids' => $this->pinnedChatIds,
            'included_chat_ids' => $this->includedChatIds,
            'excluded_chat_ids' => $this->excludedChatIds,
            'exclude_muted' => $this->excludeMuted,
            'exclude_read' => $this->excludeRead,
            'exclude_archived' => $this->excludeArchived,
            'include_contacts' => $this->includeContacts,
            'include_non_contacts' => $this->includeNonContacts,
            'include_bots' => $this->includeBots,
            'include_groups' => $this->includeGroups,
            'include_channels' => $this->includeChannels,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIcon(): ?ChatFolderIcon
    {
        return $this->icon;
    }

    public function getIsShareable(): bool
    {
        return $this->isShareable;
    }

    public function getPinnedChatIds(): array
    {
        return $this->pinnedChatIds;
    }

    public function getIncludedChatIds(): array
    {
        return $this->includedChatIds;
    }

    public function getExcludedChatIds(): array
    {
        return $this->excludedChatIds;
    }

    public function getExcludeMuted(): bool
    {
        return $this->excludeMuted;
    }

    public function getExcludeRead(): bool
    {
        return $this->excludeRead;
    }

    public function getExcludeArchived(): bool
    {
        return $this->excludeArchived;
    }

    public function getIncludeContacts(): bool
    {
        return $this->includeContacts;
    }

    public function getIncludeNonContacts(): bool
    {
        return $this->includeNonContacts;
    }

    public function getIncludeBots(): bool
    {
        return $this->includeBots;
    }

    public function getIncludeGroups(): bool
    {
        return $this->includeGroups;
    }

    public function getIncludeChannels(): bool
    {
        return $this->includeChannels;
    }
}
