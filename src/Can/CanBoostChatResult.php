<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents result of checking whether the current user can boost the specific chat
 */
class CanBoostChatResult extends TdObject
{
    public const TYPE_NAME = 'CanBoostChatResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CanBoostChatResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
