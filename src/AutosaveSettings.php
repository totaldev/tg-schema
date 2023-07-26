<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes autosave settings
 */
class AutosaveSettings extends TdObject
{
    public const TYPE_NAME = 'autosaveSettings';

    /**
     * Default autosave settings for private chats
     *
     * @var ScopeAutosaveSettings
     */
    protected ScopeAutosaveSettings $privateChatSettings;

    /**
     * Default autosave settings for basic group and supergroup chats
     *
     * @var ScopeAutosaveSettings
     */
    protected ScopeAutosaveSettings $groupSettings;

    /**
     * Default autosave settings for channel chats
     *
     * @var ScopeAutosaveSettings
     */
    protected ScopeAutosaveSettings $channelSettings;

    /**
     * Autosave settings for specific chats
     *
     * @var AutosaveSettingsException[]
     */
    protected array $exceptions;

    public function __construct(
        ScopeAutosaveSettings $privateChatSettings,
        ScopeAutosaveSettings $groupSettings,
        ScopeAutosaveSettings $channelSettings,
        array $exceptions
    ) {
        $this->privateChatSettings = $privateChatSettings;
        $this->groupSettings = $groupSettings;
        $this->channelSettings = $channelSettings;
        $this->exceptions = $exceptions;
    }

    public static function fromArray(array $array): AutosaveSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['private_chat_settings']),
            TdSchemaRegistry::fromArray($array['group_settings']),
            TdSchemaRegistry::fromArray($array['channel_settings']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['exceptions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'private_chat_settings' => $this->privateChatSettings->typeSerialize(),
            'group_settings' => $this->groupSettings->typeSerialize(),
            'channel_settings' => $this->channelSettings->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->exceptions),
        ];
    }

    public function getPrivateChatSettings(): ScopeAutosaveSettings
    {
        return $this->privateChatSettings;
    }

    public function getGroupSettings(): ScopeAutosaveSettings
    {
        return $this->groupSettings;
    }

    public function getChannelSettings(): ScopeAutosaveSettings
    {
        return $this->channelSettings;
    }

    public function getExceptions(): array
    {
        return $this->exceptions;
    }
}
