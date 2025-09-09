<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with information about a group call not bound to a chat. If the message is incoming, the call isn't active, isn't missed, and has no duration, and
 * getOption("can_accept_calls") is true, then incoming call screen must be shown to the user. Use getGroupCallParticipants to show current group call
 * participants on the screen. Use joinGroupCall to accept the call or declineGroupCallInvitation to decline it. If the call become active or missed, then the
 * call screen must be hidden.
 */
class MessageGroupCall extends MessageContent
{
    public const TYPE_NAME = 'messageGroupCall';

    public function __construct(
        /**
         * True, if the call is active, i.e. the called user joined the call.
         */
        protected bool  $isActive,
        /**
         * True, if the called user missed or declined the call.
         */
        protected bool  $wasMissed,
        /**
         * True, if the call is a video call.
         */
        protected bool  $isVideo,
        /**
         * Call duration, in seconds; for left calls only.
         */
        protected int   $duration,
        /**
         * Identifiers of some other call participants.
         *
         * @var MessageSender[]
         */
        protected array $otherParticipantIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGroupCall
    {
        return new static(
            $array['is_active'],
            $array['was_missed'],
            $array['is_video'],
            $array['duration'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['other_participant_ids']),
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function getOtherParticipantIds(): array
    {
        return $this->otherParticipantIds;
    }

    public function getWasMissed(): bool
    {
        return $this->wasMissed;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'is_active'             => $this->isActive,
            'was_missed'            => $this->wasMissed,
            'is_video'              => $this->isVideo,
            'duration'              => $this->duration,
            'other_participant_ids' => array_map(static fn($x) => $x->typeSerialize(), $this->otherParticipantIds),
        ];
    }
}
