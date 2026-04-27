<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether current user's video is enabled.
 */
class ToggleGroupCallIsMyVideoEnabled extends TdFunction
{
    public const string TYPE_NAME = 'toggleGroupCallIsMyVideoEnabled';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * Pass true if the current user's video is enabled.
         */
        protected bool $isMyVideoEnabled,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallIsMyVideoEnabled
    {
        return new static(
            groupCallId     : $array['group_call_id'],
            isMyVideoEnabled: $array['is_my_video_enabled'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setIsMyVideoEnabled(bool $value): static
    {
        $this->isMyVideoEnabled = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'group_call_id'       => $this->groupCallId,
            'is_my_video_enabled' => $this->isMyVideoEnabled,
        ];
    }
}
