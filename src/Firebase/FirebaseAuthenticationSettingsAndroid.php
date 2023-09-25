<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Settings for Firebase Authentication in the official Android application
 */
class FirebaseAuthenticationSettingsAndroid extends FirebaseAuthenticationSettings
{
    public const TYPE_NAME = 'firebaseAuthenticationSettingsAndroid';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): FirebaseAuthenticationSettingsAndroid
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
