<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about the payment method chosen by the user.
 */
class InputCredentials extends TdObject
{
    public const TYPE_NAME = 'InputCredentials';

    public function __construct() {}

    public static function fromArray(array $array): InputCredentials
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
