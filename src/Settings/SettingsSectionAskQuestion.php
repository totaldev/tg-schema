<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The "Ask a question" section.
 */
class SettingsSectionAskQuestion extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionAskQuestion';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionAskQuestion
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
