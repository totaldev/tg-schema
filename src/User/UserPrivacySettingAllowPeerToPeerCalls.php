<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether peer-to-peer connections can be used for calls.
 */
class UserPrivacySettingAllowPeerToPeerCalls extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingAllowPeerToPeerCalls';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingAllowPeerToPeerCalls
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
