<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes volume level of a participant of an active group call. If the current user can manage the group call or is the owner of the group call, then the
 * participant's volume level will be changed for all users with the default volume level.
 */
class SetGroupCallParticipantVolumeLevel extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallParticipantVolumeLevel';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * Participant identifier.
         */
        protected MessageSender $participantId,
        /**
         * New participant's volume level; 1-20000 in hundreds of percents.
         */
        protected int           $volumeLevel
    ) {}

    public static function fromArray(array $array): SetGroupCallParticipantVolumeLevel
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['volume_level'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'group_call_id'  => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'volume_level'   => $this->volumeLevel,
        ];
    }
}
