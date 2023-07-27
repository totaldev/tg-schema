<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns default message auto-delete time setting for new chats
 */
class GetDefaultMessageAutoDeleteTime extends TdFunction
{
    public const TYPE_NAME = 'getDefaultMessageAutoDeleteTime';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetDefaultMessageAutoDeleteTime
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
