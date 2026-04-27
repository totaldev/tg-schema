<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The "Telegram Features" section.
 */
class SettingsSectionFeatures extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionFeatures';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionFeatures
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
