<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a recently speaking participant in a group call.
 */
class GroupCallRecentSpeaker extends TdObject
{
    public const string TYPE_NAME = 'groupCallRecentSpeaker';

    public function __construct(
        /**
         * True, is the user has spoken recently.
         */
        protected bool          $isSpeaking,
        /**
         * Group call participant identifier.
         */
        protected MessageSender $participantId,
    ) {}

    public static function fromArray(array $array): GroupCallRecentSpeaker
    {
        return new static(
            isSpeaking   : $array['is_speaking'],
            participantId: TdSchemaRegistry::fromArray($array['participant_id']),
        );
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function setIsSpeaking(bool $value): static
    {
        $this->isSpeaking = $value;

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
            'is_speaking'    => $this->isSpeaking,
            'participant_id' => $this->participantId->jsonSerialize(),
        ];
    }
}
