<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the type of a call server
 */
class CallServerType extends TdObject
{
    public const TYPE_NAME = 'CallServerType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CallServerType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
