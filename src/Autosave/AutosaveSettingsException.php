<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\Scope\ScopeAutosaveSettings;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains autosave settings for a chat, which overrides default settings for the corresponding scope.
 */
class AutosaveSettingsException extends TdObject
{
    public const string TYPE_NAME = 'autosaveSettingsException';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                   $chatId,
        /**
         * Autosave settings for the chat.
         */
        protected ScopeAutosaveSettings $settings,
    ) {}

    public static function fromArray(array $array): AutosaveSettingsException
    {
        return new static(
            chatId  : $array['chat_id'],
            settings: TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSettings(): ScopeAutosaveSettings
    {
        return $this->settings;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setSettings(ScopeAutosaveSettings $value): static
    {
        $this->settings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'settings' => $this->settings->jsonSerialize(),
        ];
    }
}
