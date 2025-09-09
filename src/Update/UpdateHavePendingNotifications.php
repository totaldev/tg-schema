<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Describes whether there are some pending notification updates. Can be used to prevent application from killing, while there are some pending notifications.
 */
class UpdateHavePendingNotifications extends Update
{
    public const TYPE_NAME = 'updateHavePendingNotifications';

    public function __construct(
        /**
         * True, if there are some delayed notification updates, which will be sent soon.
         */
        protected bool $haveDelayedNotifications,
        /**
         * True, if there can be some yet unreceived notifications, which are being fetched from the server.
         */
        protected bool $haveUnreceivedNotifications,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateHavePendingNotifications
    {
        return new static(
            $array['have_delayed_notifications'],
            $array['have_unreceived_notifications'],
        );
    }

    public function getHaveDelayedNotifications(): bool
    {
        return $this->haveDelayedNotifications;
    }

    public function getHaveUnreceivedNotifications(): bool
    {
        return $this->haveUnreceivedNotifications;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'have_delayed_notifications'    => $this->haveDelayedNotifications,
            'have_unreceived_notifications' => $this->haveUnreceivedNotifications,
        ];
    }
}
