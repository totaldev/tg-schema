<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a single result of an inline query; for bots only
 */
class InputInlineQueryResult extends TdObject
{
    public const TYPE_NAME = 'InputInlineQueryResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputInlineQueryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
