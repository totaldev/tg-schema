<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

use Totaldev\TgSchema\TdObject;

/**
 * Describes parameters to be used for device verification.
 */
class FirebaseDeviceVerificationParameters extends TdObject
{
    public const TYPE_NAME = 'FirebaseDeviceVerificationParameters';

    public function __construct() {}

    public static function fromArray(array $array): FirebaseDeviceVerificationParameters
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
