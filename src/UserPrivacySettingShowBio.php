<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A privacy setting for managing whether the user's bio is visible
 */
class UserPrivacySettingShowBio extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingShowBio';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowBio
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
