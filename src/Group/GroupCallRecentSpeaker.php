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
    public const TYPE_NAME = 'groupCallRecentSpeaker';

    public function __construct(
        /**
         * Group call participant identifier.
         */
        protected MessageSender $participantId,
        /**
         * True, is the user has spoken recently.
         */
        protected bool          $isSpeaking
    ) {}

    public static function fromArray(array $array): GroupCallRecentSpeaker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_speaking'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_speaking'    => $this->isSpeaking,
        ];
    }
}
