<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The FAQ section.
 */
class SettingsSectionFaq extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionFaq';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionFaq
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
