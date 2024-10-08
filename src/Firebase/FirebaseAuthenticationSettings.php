<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

use Totaldev\TgSchema\TdObject;

/**
 * Contains settings for Firebase Authentication in the official applications.
 */
class FirebaseAuthenticationSettings extends TdObject
{
    public const TYPE_NAME = 'FirebaseAuthenticationSettings';

    public function __construct() {}

    public static function fromArray(array $array): FirebaseAuthenticationSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
