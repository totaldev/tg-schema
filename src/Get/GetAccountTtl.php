<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the period of inactivity after which the account of the current user will automatically be deleted.
 */
class GetAccountTtl extends TdFunction
{
    public const TYPE_NAME = 'getAccountTtl';

    public function __construct() {}

    public static function fromArray(array $array): GetAccountTtl
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
