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
    public const TYPE_NAME = 'toggleVideoChatEnabledStartNotification';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * New value of the enabled_start_notification setting.
         */
        protected bool $enabledStartNotification
    ) {}

    public static function fromArray(array $array): ToggleVideoChatEnabledStartNotification
    {
        return new static(
            $array['group_call_id'],
            $array['enabled_start_notification'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'group_call_id'              => $this->groupCallId,
            'enabled_start_notification' => $this->enabledStartNotification,
        ];
    }
}
