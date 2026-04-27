<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether the current user will receive a notification when the video chat starts; for scheduled video chats only.
 */
class ToggleVideoChatEnabledStartNotification extends TdFunction
{
    public const string TYPE_NAME = 'toggleVideoChatEnabledStartNotification';

    public function __construct(
        /**
         * New value of the enabled_start_notification setting.
         */
        protected bool $enabledStartNotification,
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
    ) {}

    public static function fromArray(array $array): ToggleVideoChatEnabledStartNotification
    {
        return new static(
            enabledStartNotification: $array['enabled_start_notification'],
            groupCallId             : $array['group_call_id'],
        );
    }

    public function getEnabledStartNotification(): bool
    {
        return $this->enabledStartNotification;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setEnabledStartNotification(bool $value): static
    {
        $this->enabledStartNotification = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'enabled_start_notification' => $this->enabledStartNotification,
            'group_call_id'              => $this->groupCallId,
        ];
    }
}
