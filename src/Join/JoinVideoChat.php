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
    public const string TYPE_NAME = 'joinVideoChat';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int                     $groupCallId,
        /**
         * Invite hash as received from internalLinkTypeVideoChat.
         */
        protected string                  $inviteHash,
        /**
         * Parameters to join the call.
         */
        protected GroupCallJoinParameters $joinParameters,
        /**
         * Identifier of a group call participant, which will be used to join the call; pass null to join as self; video chats only.
         */
        protected ?MessageSender          $participantId = null,
    ) {}

    public static function fromArray(array $array): JoinVideoChat
    {
        return new static(
            groupCallId   : $array['group_call_id'],
            inviteHash    : $array['invite_hash'],
            joinParameters: TdSchemaRegistry::fromArray($array['join_parameters']),
            participantId : (isset($array['participant_id']) ? TdSchemaRegistry::fromArray($array['participant_id']) : null),
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

    public function getParticipantId(): ?MessageSender
    {
        return $this->participantId;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setInviteHash(string $value): static
    {
        $this->inviteHash = $value;

        return $this;
    }

    public function setJoinParameters(GroupCallJoinParameters $value): static
    {
        $this->joinParameters = $value;

        return $this;
    }

    public function setParticipantId(?MessageSender $value): static
    {
        $this->participantId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'group_call_id'   => $this->groupCallId,
            'invite_hash'     => $this->inviteHash,
            'join_parameters' => $this->joinParameters->jsonSerialize(),
            'participant_id'  => (null !== $this->participantId ? $this->participantId->jsonSerialize() : null),
        ];
    }
}
