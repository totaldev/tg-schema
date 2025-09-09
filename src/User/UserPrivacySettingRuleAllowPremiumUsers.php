<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A rule to allow all Premium Users to do something; currently, allowed only for userPrivacySettingAllowChatInvites.
 */
class UserPrivacySettingRuleAllowPremiumUsers extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowPremiumUsers';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowPremiumUsers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
