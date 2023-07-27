<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Clears the list of all autosave settings exceptions. The method is guaranteed to work only after at least one call to getAutosaveSettings
 */
class ClearAutosaveSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'clearAutosaveSettingsExceptions';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ClearAutosaveSettingsExceptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
