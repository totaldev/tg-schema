<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Phone;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of the request for which a code is sent to a phone number.
 */
class PhoneNumberCodeType extends TdObject
{
    public const TYPE_NAME = 'PhoneNumberCodeType';

    public function __construct() {}

    public static function fromArray(array $array): PhoneNumberCodeType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
