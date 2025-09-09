<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes saved order information.
 */
class DeleteSavedOrderInfo extends TdFunction
{
    public const TYPE_NAME = 'deleteSavedOrderInfo';

    public function __construct() {}

    public static function fromArray(array $array): DeleteSavedOrderInfo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
