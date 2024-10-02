<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether the user's birthdate is visible.
 */
class UserPrivacySettingShowBirthdate extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingShowBirthdate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowBirthdate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
