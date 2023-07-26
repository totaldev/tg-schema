<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Returns autosave settings for the current user
 */
class GetAutosaveSettings extends TdFunction
{
    public const TYPE_NAME = 'getAutosaveSettings';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetAutosaveSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
