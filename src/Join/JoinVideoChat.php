<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\Group\GroupCallJoinParameters;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Joins an active video chat. Returns join response payload for tgcalls.
 */
class JoinVideoChat extends TdFunction
{
    public const TYPE_NAME = 'joinVideoChat';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int                     $groupCallId,
        /**
         * Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only.
         */
        protected MessageSender           $participantId,
        /**
         * Parameters to join the call.
         */
        protected GroupCallJoinParameters $joinParameters,
        /**
         * Invite hash as received from internalLinkTypeVideoChat.
         */
        protected string                  $inviteHash,
    ) {}

    public static function fromArray(array $array): JoinVideoChat
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            TdSchemaRegistry::fromArray($array['join_parameters']),
            $array['invite_hash'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }

    public function getJoinParameters(): GroupCallJoinParameters
    {
        return $this->joinParameters;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'group_call_id'   => $this->groupCallId,
            'participant_id'  => $this->participantId->typeSerialize(),
            'join_parameters' => $this->joinParameters->typeSerialize(),
            'invite_hash'     => $this->inviteHash,
        ];
    }
}
