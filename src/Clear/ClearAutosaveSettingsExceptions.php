<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;

/**
 * Clears the list of all autosave settings exceptions. The method is guaranteed to work only after at least one call to getAutosaveSettings.
 */
class ClearAutosaveSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'clearAutosaveSettingsExceptions';

    public function __construct() {}

    public static function fromArray(array $array): ClearAutosaveSettingsExceptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
