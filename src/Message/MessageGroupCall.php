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
    public const string TYPE_NAME = 'messageGroupCall';

    public function __construct(
        /**
         * Call duration, in seconds; for left calls only.
         */
        protected int   $duration,
        /**
         * True, if the call is active, i.e. the called user joined the call.
         */
        protected bool  $isActive,
        /**
         * True, if the call is a video call.
         */
        protected bool  $isVideo,
        /**
         * Identifiers of some other call participants.
         *
         * @var MessageSender[]
         */
        protected array $otherParticipantIds,
        /**
         * Persistent unique group call identifier.
         */
        protected int   $uniqueId,
        /**
         * True, if the called user missed or declined the call.
         */
        protected bool  $wasMissed,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGroupCall
    {
        return new static(
            duration           : $array['duration'],
            isActive           : $array['is_active'],
            isVideo            : $array['is_video'],
            otherParticipantIds: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['other_participant_ids']),
            uniqueId           : $array['unique_id'],
            wasMissed          : $array['was_missed'],
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

    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    public function getWasMissed(): bool
    {
        return $this->wasMissed;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setIsActive(bool $value): static
    {
        $this->isActive = $value;

        return $this;
    }

    public function setIsVideo(bool $value): static
    {
        $this->isVideo = $value;

        return $this;
    }

    public function setOtherParticipantIds(array $value): static
    {
        $this->otherParticipantIds = $value;

        return $this;
    }

    public function setUniqueId(int $value): static
    {
        $this->uniqueId = $value;

        return $this;
    }

    public function setWasMissed(bool $value): static
    {
        $this->wasMissed = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'duration'              => $this->duration,
            'is_active'             => $this->isActive,
            'is_video'              => $this->isVideo,
            'other_participant_ids' => array_map(static fn($x) => $x->jsonSerialize(), $this->otherParticipantIds),
            'unique_id'             => $this->uniqueId,
            'was_missed'            => $this->wasMissed,
        ];
    }
}
