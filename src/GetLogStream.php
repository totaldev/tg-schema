<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

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
