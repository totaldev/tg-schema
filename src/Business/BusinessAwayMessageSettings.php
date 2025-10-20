<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes settings for messages that are automatically sent by a Telegram Business account when it is away.
 */
class BusinessAwayMessageSettings extends TdObject
{
    public const TYPE_NAME = 'businessAwayMessageSettings';

    public function __construct(
        /**
         * Unique quick reply shortcut identifier for the away messages.
         */
        protected int                         $shortcutId,
        /**
         * Chosen recipients of the away messages.
         */
        protected BusinessRecipients          $recipients,
        /**
         * Settings used to check whether the current user is away.
         */
        protected BusinessAwayMessageSchedule $schedule,
        /**
         * True, if the messages must not be sent if the account was online in the last 10 minutes.
         */
        protected bool                        $offlineOnly,
    ) {}

    public static function fromArray(array $array): BusinessAwayMessageSettings
    {
        return new static(
            $array['shortcut_id'],
            TdSchemaRegistry::fromArray($array['recipients']),
            TdSchemaRegistry::fromArray($array['schedule']),
            $array['offline_only'],
        );
    }

    public function getOfflineOnly(): bool
    {
        return $this->offlineOnly;
    }

    public function getRecipients(): BusinessRecipients
    {
        return $this->recipients;
    }

    public function getSchedule(): BusinessAwayMessageSchedule
    {
        return $this->schedule;
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'shortcut_id'  => $this->shortcutId,
            'recipients'   => $this->recipients->typeSerialize(),
            'schedule'     => $this->schedule->typeSerialize(),
            'offline_only' => $this->offlineOnly,
        ];
    }
}
