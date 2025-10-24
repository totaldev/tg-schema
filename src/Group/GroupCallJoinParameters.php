<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Describes parameters used to join a group call.
 */
class GroupCallJoinParameters extends TdObject
{
    public const string TYPE_NAME = 'groupCallJoinParameters';

    public function __construct(
        /**
         * Audio channel synchronization source identifier; received from tgcalls.
         */
        protected int    $audioSourceId,
        /**
         * Group call join payload; received from tgcalls.
         */
        protected string $payload,
        /**
         * Pass true to join the call with muted microphone.
         */
        protected bool   $isMuted,
        /**
         * Pass true if the user's video is enabled.
         */
        protected bool   $isMyVideoEnabled,
    ) {}

    public static function fromArray(array $array): GroupCallJoinParameters
    {
        return new static(
            $array['audio_source_id'],
            $array['payload'],
            $array['is_muted'],
            $array['is_my_video_enabled'],
        );
    }

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function setAudioSourceId(int $value): static
    {
        $this->audioSourceId = $value;

        return $this;
    }

    public function setIsMuted(bool $value): static
    {
        $this->isMuted = $value;

        return $this;
    }

    public function setIsMyVideoEnabled(bool $value): static
    {
        $this->isMyVideoEnabled = $value;

        return $this;
    }

    public function setPayload(string $value): static
    {
        $this->payload = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'audio_source_id'     => $this->audioSourceId,
            'payload'             => $this->payload,
            'is_muted'            => $this->isMuted,
            'is_my_video_enabled' => $this->isMyVideoEnabled,
        ];
    }
}
