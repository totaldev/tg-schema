<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Pauses or unpauses screen sharing in a joined group call.
 */
class ToggleGroupCallScreenSharingIsPaused extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallScreenSharingIsPaused';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * Pass true to pause screen sharing; pass false to unpause it.
         */
        protected bool $isPaused
    ) {}

    public static function fromArray(array $array): ToggleGroupCallScreenSharingIsPaused
    {
        return new static(
            $array['group_call_id'],
            $array['is_paused'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'is_paused'     => $this->isPaused,
        ];
    }
}
