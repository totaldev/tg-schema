<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\TdObject;

/**
 * Describes scope of autosave settings.
 */
class AutosaveSettingsScope extends TdObject
{
    public const TYPE_NAME = 'AutosaveSettingsScope';

    public function __construct() {}

    public static function fromArray(array $array): AutosaveSettingsScope
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
