<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The Toncoin balance and transaction section.
 */
class SettingsSectionMyToncoins extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionMyToncoins';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionMyToncoins
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
