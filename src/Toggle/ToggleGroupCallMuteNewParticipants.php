<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether new participants of a group call can be unmuted only by administrators of the group call. Requires
 * groupCall.can_toggle_mute_new_participants group call flag.
 */
class ToggleGroupCallMuteNewParticipants extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallMuteNewParticipants';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * New value of the mute_new_participants setting.
         */
        protected bool $muteNewParticipants,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallMuteNewParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['mute_new_participants'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'group_call_id'         => $this->groupCallId,
            'mute_new_participants' => $this->muteNewParticipants,
        ];
    }
}
