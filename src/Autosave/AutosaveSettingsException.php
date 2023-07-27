<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\Scope\ScopeAutosaveSettings;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains autosave settings for a chat, which overrides default settings for the corresponding scope
 */
class AutosaveSettingsException extends TdObject
{
    public const TYPE_NAME = 'autosaveSettingsException';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Autosave settings for the chat
     *
     * @var ScopeAutosaveSettings
     */
    protected ScopeAutosaveSettings $settings;

    public function __construct(int $chatId, ScopeAutosaveSettings $settings)
    {
        $this->chatId = $chatId;
        $this->settings = $settings;
    }

    public static function fromArray(array $array): AutosaveSettingsException
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'settings' => $this->settings->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSettings(): ScopeAutosaveSettings
    {
        return $this->settings;
    }
}