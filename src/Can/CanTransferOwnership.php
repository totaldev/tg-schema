<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether the current session can be used to transfer a chat ownership to another user
 */
class CanTransferOwnership extends TdFunction
{
    public const TYPE_NAME = 'canTransferOwnership';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CanTransferOwnership
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
