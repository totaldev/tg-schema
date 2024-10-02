<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

/**
 * The user is offline, but was online last week.
 */
class UserStatusLastWeek extends UserStatus
{
    public const TYPE_NAME = 'userStatusLastWeek';

    public function __construct(
        /**
         * Exact user's status is hidden because the current user enabled userPrivacySettingShowStatus privacy setting for the user and has no Telegram Premium.
         */
        protected bool $byMyPrivacySettings
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UserStatusLastWeek
    {
        return new static(
            $array['by_my_privacy_settings'],
        );
    }

    public function getByMyPrivacySettings(): bool
    {
        return $this->byMyPrivacySettings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'by_my_privacy_settings' => $this->byMyPrivacySettings,
        ];
    }
}
