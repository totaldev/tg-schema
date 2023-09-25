<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Closes the TDLib instance. All databases will be flushed to disk and properly closed. After the close completes, updateAuthorizationState with
 * authorizationStateClosed will be sent. Can be called before initialization
 */
class Close extends TdFunction
{
    public const TYPE_NAME = 'close';

    public function __construct()
    {
    }

    public static function fromArray(array $array): Close
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
