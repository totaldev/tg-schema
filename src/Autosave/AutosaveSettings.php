<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\Scope\ScopeAutosaveSettings;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes autosave settings.
 */
class AutosaveSettings extends TdObject
{
    public const string TYPE_NAME = 'autosaveSettings';

    public function __construct(
        /**
         * Default autosave settings for private chats.
         */
        protected ScopeAutosaveSettings $privateChatSettings,
        /**
         * Default autosave settings for basic group and supergroup chats.
         */
        protected ScopeAutosaveSettings $groupSettings,
        /**
         * Default autosave settings for channel chats.
         */
        protected ScopeAutosaveSettings $channelSettings,
        /**
         * Autosave settings for specific chats.
         *
         * @var AutosaveSettingsException[]
         */
        protected array                 $exceptions,
    ) {}

    public static function fromArray(array $array): AutosaveSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['private_chat_settings']),
            TdSchemaRegistry::fromArray($array['group_settings']),
            TdSchemaRegistry::fromArray($array['channel_settings']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['exceptions']),
        );
    }

    public function getChannelSettings(): ScopeAutosaveSettings
    {
        return $this->channelSettings;
    }

    public function getExceptions(): array
    {
        return $this->exceptions;
    }

    public function getGroupSettings(): ScopeAutosaveSettings
    {
        return $this->groupSettings;
    }

    public function getPrivateChatSettings(): ScopeAutosaveSettings
    {
        return $this->privateChatSettings;
    }

    public function setChannelSettings(ScopeAutosaveSettings $value): static
    {
        $this->channelSettings = $value;

        return $this;
    }

    public function setExceptions(array $value): static
    {
        $this->exceptions = $value;

        return $this;
    }

    public function setGroupSettings(ScopeAutosaveSettings $value): static
    {
        $this->groupSettings = $value;

        return $this;
    }

    public function setPrivateChatSettings(ScopeAutosaveSettings $value): static
    {
        $this->privateChatSettings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'private_chat_settings' => $this->privateChatSettings->typeSerialize(),
            'group_settings'        => $this->groupSettings->typeSerialize(),
            'channel_settings'      => $this->channelSettings->typeSerialize(),
            'exceptions'            => array_map(static fn($x) => $x->typeSerialize(), $this->exceptions),
        ];
    }
}
