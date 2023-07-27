<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns all close friends of the current user
 */
class GetCloseFriends extends TdFunction
{
    public const TYPE_NAME = 'getCloseFriends';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCloseFriends
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}