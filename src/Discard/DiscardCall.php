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
    public const TYPE_NAME = 'discardCall';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int    $callId,
        /**
         * Pass true if the user was disconnected.
         */
        protected bool   $isDisconnected,
        /**
         * If the call was upgraded to a group call, pass invite link to the group call.
         */
        protected string $inviteLink,
        /**
         * The call duration, in seconds.
         */
        protected int    $duration,
        /**
         * Pass true if the call was a video call.
         */
        protected bool   $isVideo,
        /**
         * Identifier of the connection used during the call.
         */
        protected int    $connectionId,
    ) {}

    public static function fromArray(array $array): DiscardCall
    {
        return new static(
            $array['call_id'],
            $array['is_disconnected'],
            $array['invite_link'],
            $array['duration'],
            $array['is_video'],
            $array['connection_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'call_id'         => $this->callId,
            'is_disconnected' => $this->isDisconnected,
            'invite_link'     => $this->inviteLink,
            'duration'        => $this->duration,
            'is_video'        => $this->isVideo,
            'connection_id'   => $this->connectionId,
        ];
    }
}
