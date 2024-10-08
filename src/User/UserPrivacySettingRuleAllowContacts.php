<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A rule to allow all contacts of the user to do something.
 */
class UserPrivacySettingRuleAllowContacts extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowContacts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
