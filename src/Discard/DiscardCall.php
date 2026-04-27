<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Discard;

use Totaldev\TgSchema\TdFunction;

/**
 * Discards a call.
 */
class DiscardCall extends TdFunction
{
    public const string TYPE_NAME = 'discardCall';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int    $callId,
        /**
         * Identifier of the connection used during the call.
         */
        protected int    $connectionId,
        /**
         * The call duration, in seconds.
         */
        protected int    $duration,
        /**
         * If the call was upgraded to a group call, pass invite link to the group call.
         */
        protected string $inviteLink,
        /**
         * Pass true if the user was disconnected.
         */
        protected bool   $isDisconnected,
        /**
         * Pass true if the call was a video call.
         */
        protected bool   $isVideo,
    ) {}

    public static function fromArray(array $array): DiscardCall
    {
        return new static(
            callId        : $array['call_id'],
            connectionId  : $array['connection_id'],
            duration      : $array['duration'],
            inviteLink    : $array['invite_link'],
            isDisconnected: $array['is_disconnected'],
            isVideo       : $array['is_video'],
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getConnectionId(): int
    {
        return $this->connectionId;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getIsDisconnected(): bool
    {
        return $this->isDisconnected;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function setCallId(int $value): static
    {
        $this->callId = $value;

        return $this;
    }

    public function setConnectionId(int $value): static
    {
        $this->connectionId = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setIsDisconnected(bool $value): static
    {
        $this->isDisconnected = $value;

        return $this;
    }

    public function setIsVideo(bool $value): static
    {
        $this->isVideo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'call_id'         => $this->callId,
            'connection_id'   => $this->connectionId,
            'duration'        => $this->duration,
            'invite_link'     => $this->inviteLink,
            'is_disconnected' => $this->isDisconnected,
            'is_video'        => $this->isVideo,
        ];
    }
}
