<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a section of the application settings.
 */
class SettingsSection extends TdObject
{
    public const string TYPE_NAME = 'SettingsSection';

    public function __construct() {}

    public static function fromArray(array $array): SettingsSection
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
