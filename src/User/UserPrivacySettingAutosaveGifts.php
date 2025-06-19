<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether received gifts are automatically shown on the user's profile page.
 */
class UserPrivacySettingAutosaveGifts extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingAutosaveGifts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingAutosaveGifts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
