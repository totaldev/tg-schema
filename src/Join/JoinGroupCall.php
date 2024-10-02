<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Joins an active group call. Returns join response payload for tgcalls.
 */
class JoinGroupCall extends TdFunction
{
    public const TYPE_NAME = 'joinGroupCall';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only.
         */
        protected MessageSender $participantId,
        /**
         * Caller audio channel synchronization source identifier; received from tgcalls.
         */
        protected int           $audioSourceId,
        /**
         * Group call join payload; received from tgcalls.
         */
        protected string        $payload,
        /**
         * Pass true to join the call with muted microphone.
         */
        protected bool          $isMuted,
        /**
         * Pass true if the user's video is enabled.
         */
        protected bool          $isMyVideoEnabled,
        /**
         * If non-empty, invite hash to be used to join the group call without being muted by administrators.
         */
        protected string        $inviteHash,
    ) {}

    public static function fromArray(array $array): JoinGroupCall
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['audio_source_id'],
            $array['payload'],
            $array['is_muted'],
            $array['is_my_video_enabled'],
            $array['invite_hash'],
        );
    }

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'group_call_id'       => $this->groupCallId,
            'participant_id'      => $this->participantId->typeSerialize(),
            'audio_source_id'     => $this->audioSourceId,
            'payload'             => $this->payload,
            'is_muted'            => $this->isMuted,
            'is_my_video_enabled' => $this->isMyVideoEnabled,
            'invite_hash'         => $this->inviteHash,
        ];
    }
}
