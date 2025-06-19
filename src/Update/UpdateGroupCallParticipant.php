<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Group\GroupCallParticipant;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about a group call participant was changed. The updates are sent only after the group call is received through getGroupCall and only if the call
 * is joined or being joined.
 */
class UpdateGroupCallParticipant extends Update
{
    public const TYPE_NAME = 'updateGroupCallParticipant';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int                  $groupCallId,
        /**
         * New data about the participant.
         */
        protected GroupCallParticipant $participant
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallParticipant
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getParticipant(): GroupCallParticipant
    {
        return $this->participant;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'participant'   => $this->participant->typeSerialize(),
        ];
    }
}
