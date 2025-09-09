<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether a participant of an active group call is muted, unmuted, or allowed to unmute themselves.
 */
class ToggleGroupCallParticipantIsMuted extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallParticipantIsMuted';

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
         * Pass true to mute the user; pass false to unmute them.
         */
        protected bool          $isMuted,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallParticipantIsMuted
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_muted'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'group_call_id'  => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_muted'       => $this->isMuted,
        ];
    }
}
