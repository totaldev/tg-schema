<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that speaking state of a participant of an active group call has changed. Returns identifier of the participant if it is found.
 */
class SetGroupCallParticipantIsSpeaking extends TdFunction
{
    public const string TYPE_NAME = 'setGroupCallParticipantIsSpeaking';

    public function __construct(
        /**
         * Group call participant's synchronization audio source identifier, or 0 for the current user.
         */
        protected int  $audioSource,
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * Pass true if the user is speaking.
         */
        protected bool $isSpeaking,
    ) {}

    public static function fromArray(array $array): SetGroupCallParticipantIsSpeaking
    {
        return new static(
            audioSource: $array['audio_source'],
            groupCallId: $array['group_call_id'],
            isSpeaking : $array['is_speaking'],
        );
    }

    public function getAudioSource(): int
    {
        return $this->audioSource;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    public function setAudioSource(int $value): static
    {
        $this->audioSource = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setIsSpeaking(bool $value): static
    {
        $this->isSpeaking = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'audio_source'  => $this->audioSource,
            'group_call_id' => $this->groupCallId,
            'is_speaking'   => $this->isSpeaking,
        ];
    }
}
