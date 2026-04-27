<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video chat participant was muted or unmuted.
 */
class ChatEventVideoChatParticipantIsMutedToggled extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventVideoChatParticipantIsMutedToggled';

    public function __construct(
        /**
         * New value of is_muted.
         */
        protected bool          $isMuted,
        /**
         * Identifier of the affected group call participant.
         */
        protected MessageSender $participantId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventVideoChatParticipantIsMutedToggled
    {
        return new static(
            isMuted      : $array['is_muted'],
            participantId: TdSchemaRegistry::fromArray($array['participant_id']),
        );
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
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
            'is_muted'       => $this->isMuted,
            'participant_id' => $this->participantId->jsonSerialize(),
        ];
    }
}
