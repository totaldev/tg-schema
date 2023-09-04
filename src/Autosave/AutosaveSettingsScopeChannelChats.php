<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Autosave settings applied to all channel chats without chat-specific settings
 */
class AutosaveSettingsScopeChannelChats extends AutosaveSettingsScope
{
    public const TYPE_NAME = 'autosaveSettingsScopeChannelChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AutosaveSettingsScopeChannelChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
