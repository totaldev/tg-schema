<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether the user's online status is visible.
 */
class UserPrivacySettingShowStatus extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingShowStatus';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowStatus
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
