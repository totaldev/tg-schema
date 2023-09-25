<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns auto-download settings presets for the current user
 */
class GetAutoDownloadSettingsPresets extends TdFunction
{
    public const TYPE_NAME = 'getAutoDownloadSettingsPresets';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetAutoDownloadSettingsPresets
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
