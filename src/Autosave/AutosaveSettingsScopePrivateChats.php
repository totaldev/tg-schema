<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Autosave settings applied to all private chats without chat-specific settings
 */
class AutosaveSettingsScopePrivateChats extends AutosaveSettingsScope
{
    public const TYPE_NAME = 'autosaveSettingsScopePrivateChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): AutosaveSettingsScopePrivateChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
