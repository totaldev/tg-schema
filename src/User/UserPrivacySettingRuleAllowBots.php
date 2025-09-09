<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A rule to allow all bots to do something.
 */
class UserPrivacySettingRuleAllowBots extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowBots';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
