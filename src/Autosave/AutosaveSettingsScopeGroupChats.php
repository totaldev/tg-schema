<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Autosave settings applied to all basic group and supergroup chats without chat-specific settings
 */
class AutosaveSettingsScopeGroupChats extends AutosaveSettingsScope
{
    public const TYPE_NAME = 'autosaveSettingsScopeGroupChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AutosaveSettingsScopeGroupChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
