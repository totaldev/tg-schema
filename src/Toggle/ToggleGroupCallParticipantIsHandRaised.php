<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether a group call participant hand is rased; for video chats only.
 */
class ToggleGroupCallParticipantIsHandRaised extends TdFunction
{
    public const TYPE_NAME = 'toggleGroupCallParticipantIsHandRaised';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * Participant identifier.
         */
        protected MessageSender $participantId,
        /**
         * Pass true if the user's hand needs to be raised. Only self hand can be raised. Requires groupCall.can_be_managed right to lower other's hand.
         */
        protected bool          $isHandRaised
    ) {}

    public static function fromArray(array $array): ToggleGroupCallParticipantIsHandRaised
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_hand_raised'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsHandRaised(): bool
    {
        return $this->isHandRaised;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'group_call_id'  => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_hand_raised' => $this->isHandRaised,
        ];
    }
}
