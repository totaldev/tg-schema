<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The log is written to stderr or an OS specific log
 */
class LogStreamDefault extends LogStream
{
    public const TYPE_NAME = 'logStreamDefault';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LogStreamDefault
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
