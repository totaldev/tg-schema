<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether the user's profile audio files are visible.
 */
class UserPrivacySettingShowProfileAudio extends UserPrivacySetting
{
    public const string TYPE_NAME = 'userPrivacySettingShowProfileAudio';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingShowProfileAudio
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
