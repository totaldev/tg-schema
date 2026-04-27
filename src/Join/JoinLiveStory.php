<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\Group\GroupCallJoinParameters;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Joins a group call of an active live story. Returns join response payload for tgcalls.
 */
class JoinLiveStory extends TdFunction
{
    public const string TYPE_NAME = 'joinLiveStory';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int                     $groupCallId,
        /**
         * Parameters to join the call.
         */
        protected GroupCallJoinParameters $joinParameters,
    ) {}

    public static function fromArray(array $array): JoinLiveStory
    {
        return new static(
            groupCallId   : $array['group_call_id'],
            joinParameters: TdSchemaRegistry::fromArray($array['join_parameters']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getJoinParameters(): GroupCallJoinParameters
    {
        return $this->joinParameters;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setJoinParameters(GroupCallJoinParameters $value): static
    {
        $this->joinParameters = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'group_call_id'   => $this->groupCallId,
            'join_parameters' => $this->joinParameters->jsonSerialize(),
        ];
    }
}
