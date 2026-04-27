<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * Search in Settings.
 */
class SettingsSectionSearch extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionSearch';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionSearch
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
