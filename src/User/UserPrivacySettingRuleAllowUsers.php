<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * A rule to allow certain specified users to do something.
 */
class UserPrivacySettingRuleAllowUsers extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowUsers';

    public function __construct(
        /**
         * The user identifiers, total number of users in all rules must not exceed 1000.
         *
         * @var int[]
         */
        protected array $userIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowUsers
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }
}
