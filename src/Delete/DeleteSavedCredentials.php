<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deletes saved credentials for all payment provider bots
 */
class DeleteSavedCredentials extends TdFunction
{
    public const TYPE_NAME = 'deleteSavedCredentials';

    public function __construct()
    {
    }

    public static function fromArray(array $array): DeleteSavedCredentials
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
