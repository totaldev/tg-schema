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
    public const string TYPE_NAME = 'businessAwayMessageSettings';

    public function __construct(
        /**
         * True, if the messages must not be sent if the account was online in the last 10 minutes.
         */
        protected bool                        $offlineOnly,
        /**
         * Chosen recipients of the away messages.
         */
        protected BusinessRecipients          $recipients,
        /**
         * Settings used to check whether the current user is away.
         */
        protected BusinessAwayMessageSchedule $schedule,
        /**
         * Unique quick reply shortcut identifier for the away messages.
         */
        protected int                         $shortcutId,
    ) {}

    public static function fromArray(array $array): BusinessAwayMessageSettings
    {
        return new static(
            offlineOnly: $array['offline_only'],
            recipients : TdSchemaRegistry::fromArray($array['recipients']),
            schedule   : TdSchemaRegistry::fromArray($array['schedule']),
            shortcutId : $array['shortcut_id'],
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

    public function setOfflineOnly(bool $value): static
    {
        $this->offlineOnly = $value;

        return $this;
    }

    public function setRecipients(BusinessRecipients $value): static
    {
        $this->recipients = $value;

        return $this;
    }

    public function setSchedule(BusinessAwayMessageSchedule $value): static
    {
        $this->schedule = $value;

        return $this;
    }

    public function setShortcutId(int $value): static
    {
        $this->shortcutId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'offline_only' => $this->offlineOnly,
            'recipients'   => $this->recipients->jsonSerialize(),
            'schedule'     => $this->schedule->jsonSerialize(),
            'shortcut_id'  => $this->shortcutId,
        ];
    }
}
