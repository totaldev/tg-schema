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
    public const string TYPE_NAME = 'toggleGroupCallParticipantIsMuted';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * Pass true to mute the user; pass false to unmute them.
         */
        protected bool          $isMuted,
        /**
         * Participant identifier.
         */
        protected MessageSender $participantId,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallParticipantIsMuted
    {
        return new static(
            groupCallId  : $array['group_call_id'],
            isMuted      : $array['is_muted'],
            participantId: TdSchemaRegistry::fromArray($array['participant_id']),
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

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setIsMuted(bool $value): static
    {
        $this->isMuted = $value;

        return $this;
    }

    public function setParticipantId(MessageSender $value): static
    {
        $this->participantId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'group_call_id'  => $this->groupCallId,
            'is_muted'       => $this->isMuted,
            'participant_id' => $this->participantId->jsonSerialize(),
        ];
    }
}
