<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether the user's phone number is visible.
 */
class UserPrivacySettingShowPhoneNumber extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingShowPhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowPhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
