<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A rule to restrict all specified users from doing something
 */
class UserPrivacySettingRuleRestrictUsers extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleRestrictUsers';

    /**
     * The user identifiers, total number of users in all rules must not exceed 1000
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds)
    {
        parent::__construct();

        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): UserPrivacySettingRuleRestrictUsers
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
