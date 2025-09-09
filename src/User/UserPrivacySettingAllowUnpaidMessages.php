<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A privacy setting for managing whether the user can receive messages without additional payment.
 */
class UserPrivacySettingAllowUnpaidMessages extends UserPrivacySetting
{
    public const TYPE_NAME = 'userPrivacySettingAllowUnpaidMessages';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingAllowUnpaidMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
