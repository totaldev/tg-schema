<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that speaking state of a participant of an active group has changed.
 */
class SetGroupCallParticipantIsSpeaking extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallParticipantIsSpeaking';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * Group call participant's synchronization audio source identifier, or 0 for the current user.
         */
        protected int  $audioSource,
        /**
         * Pass true if the user is speaking.
         */
        protected bool $isSpeaking,
    ) {}

    public static function fromArray(array $array): SetGroupCallParticipantIsSpeaking
    {
        return new static(
            $array['group_call_id'],
            $array['audio_source'],
            $array['is_speaking'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'audio_source'  => $this->audioSource,
            'is_speaking'   => $this->isSpeaking,
        ];
    }
}
