<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether current user's video is paused.
 */
class ToggleGroupCallIsMyVideoPaused extends TdFunction
{
    public const string TYPE_NAME = 'toggleGroupCallIsMyVideoPaused';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * Pass true if the current user's video is paused.
         */
        protected bool $isMyVideoPaused,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallIsMyVideoPaused
    {
        return new static(
            groupCallId    : $array['group_call_id'],
            isMyVideoPaused: $array['is_my_video_paused'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsMyVideoPaused(): bool
    {
        return $this->isMyVideoPaused;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setIsMyVideoPaused(bool $value): static
    {
        $this->isMyVideoPaused = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'group_call_id'      => $this->groupCallId,
            'is_my_video_paused' => $this->isMyVideoPaused,
        ];
    }
}
