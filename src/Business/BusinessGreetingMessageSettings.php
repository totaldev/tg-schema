<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes settings for greeting messages that are automatically sent by a Telegram Business account as response to incoming messages in an inactive private
 * chat.
 */
class BusinessGreetingMessageSettings extends TdObject
{
    public const string TYPE_NAME = 'businessGreetingMessageSettings';

    public function __construct(
        /**
         * Unique quick reply shortcut identifier for the greeting messages.
         */
        protected int                $shortcutId,
        /**
         * Chosen recipients of the greeting messages.
         */
        protected BusinessRecipients $recipients,
        /**
         * The number of days after which a chat will be considered as inactive; currently, must be on of 7, 14, 21, or 28.
         */
        protected int                $inactivityDays,
    ) {}

    public static function fromArray(array $array): BusinessGreetingMessageSettings
    {
        return new static(
            $array['shortcut_id'],
            TdSchemaRegistry::fromArray($array['recipients']),
            $array['inactivity_days'],
        );
    }

    public function getInactivityDays(): int
    {
        return $this->inactivityDays;
    }

    public function getRecipients(): BusinessRecipients
    {
        return $this->recipients;
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function setInactivityDays(int $value): static
    {
        $this->inactivityDays = $value;

        return $this;
    }

    public function setRecipients(BusinessRecipients $value): static
    {
        $this->recipients = $value;

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
            '@type'           => static::TYPE_NAME,
            'shortcut_id'     => $this->shortcutId,
            'recipients'      => $this->recipients->typeSerialize(),
            'inactivity_days' => $this->inactivityDays,
        ];
    }
}
