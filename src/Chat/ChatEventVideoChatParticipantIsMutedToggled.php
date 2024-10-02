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
    public const TYPE_NAME = 'chatEventVideoChatParticipantIsMutedToggled';

    public function __construct(
        /**
         * Identifier of the affected group call participant.
         */
        protected MessageSender $participantId,
        /**
         * New value of is_muted.
         */
        protected bool          $isMuted,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventVideoChatParticipantIsMutedToggled
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_muted'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_muted'       => $this->isMuted,
        ];
    }
}
