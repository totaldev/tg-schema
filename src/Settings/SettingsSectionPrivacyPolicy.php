<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The "Privacy Policy" section.
 */
class SettingsSectionPrivacyPolicy extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionPrivacyPolicy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionPrivacyPolicy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
