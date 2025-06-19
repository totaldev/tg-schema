<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of group call participants that can send and receive encrypted call data has changed; for group calls not bound to a chat only.
 */
class UpdateGroupCallParticipants extends Update
{
    public const TYPE_NAME = 'updateGroupCallParticipants';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int   $groupCallId,
        /**
         * New list of group call participant user identifiers. The identifiers may be invalid or the corresponding users may be unknown. The participants must be shown in the list of group call participants even there is no information about them.
         *
         * @var int[]
         */
        protected array $participantUserIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['participant_user_ids'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getParticipantUserIds(): array
    {
        return $this->participantUserIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'group_call_id'        => $this->groupCallId,
            'participant_user_ids' => $this->participantUserIds,
        ];
    }
}
