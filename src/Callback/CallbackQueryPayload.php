<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Callback;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a payload of a callback query
 */
class CallbackQueryPayload extends TdObject
{
    public const TYPE_NAME = 'CallbackQueryPayload';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CallbackQueryPayload
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
