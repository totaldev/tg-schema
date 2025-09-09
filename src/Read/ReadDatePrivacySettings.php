<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdObject;

/**
 * Contains privacy settings for message read date in private chats. Read dates are always shown to the users that can see online status of the current user
 * regardless of this setting.
 */
class ReadDatePrivacySettings extends TdObject
{
    public const TYPE_NAME = 'readDatePrivacySettings';

    public function __construct(
        /**
         * True, if message read date is shown to other users in private chats. If false and the current user isn't a Telegram Premium user, then they will not be able to see other's message read date.
         */
        protected bool $showReadDate
    ) {}

    public static function fromArray(array $array): ReadDatePrivacySettings
    {
        return new static(
            $array['show_read_date'],
        );
    }

    public function getShowReadDate(): bool
    {
        return $this->showReadDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'show_read_date' => $this->showReadDate,
        ];
    }
}
