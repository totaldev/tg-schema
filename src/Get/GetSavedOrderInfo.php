<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns saved order information. Returns a 404 error if there is no saved order information
 */
class GetSavedOrderInfo extends TdFunction
{
    public const TYPE_NAME = 'getSavedOrderInfo';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSavedOrderInfo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
