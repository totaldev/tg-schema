<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether the user can receive voice and video messages in private chats; for Telegram Premium users only.
 */
class UserPrivacySettingAllowPrivateVoiceAndVideoNoteMessages extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingAllowPrivateVoiceAndVideoNoteMessages';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingAllowPrivateVoiceAndVideoNoteMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
