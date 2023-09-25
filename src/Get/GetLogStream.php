<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about currently used log stream for internal logging of TDLib. Can be called synchronously
 */
class GetLogStream extends TdFunction
{
    public const TYPE_NAME = 'getLogStream';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetLogStream
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
