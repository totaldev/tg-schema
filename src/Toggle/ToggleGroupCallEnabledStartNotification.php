<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether the current user will receive a notification when the group call will start; scheduled group calls only
 */
class ToggleGroupCallEnabledStartNotification extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallEnabledStartNotification';

    /**
     * New value of the enabled_start_notification setting
     *
     * @var bool
     */
    protected bool $enabledStartNotification;

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    public function __construct(int $groupCallId, bool $enabledStartNotification)
    {
        $this->groupCallId = $groupCallId;
        $this->enabledStartNotification = $enabledStartNotification;
    }

    public static function fromArray(array $array): ToggleGroupCallEnabledStartNotification
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
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'enabled_start_notification' => $this->enabledStartNotification,
        ];
    }
}
