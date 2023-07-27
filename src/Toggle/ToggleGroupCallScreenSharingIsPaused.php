<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Pauses or unpauses screen sharing in a joined group call
 */
class ToggleGroupCallScreenSharingIsPaused extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallScreenSharingIsPaused';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Pass true to pause screen sharing; pass false to unpause it
     *
     * @var bool
     */
    protected bool $isPaused;

    public function __construct(int $groupCallId, bool $isPaused)
    {
        $this->groupCallId = $groupCallId;
        $this->isPaused = $isPaused;
    }

    public static function fromArray(array $array): ToggleGroupCallScreenSharingIsPaused
    {
        return new static(
            $array['group_call_id'],
            $array['is_paused'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'is_paused' => $this->isPaused,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }
}
