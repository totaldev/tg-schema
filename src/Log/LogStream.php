<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a stream to which TDLib internal log is written.
 */
class LogStream extends TdObject
{
    public const TYPE_NAME = 'LogStream';

    public function __construct() {}

    public static function fromArray(array $array): LogStream
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
