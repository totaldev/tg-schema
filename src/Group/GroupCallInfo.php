<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a just created or just joined group call.
 */
class GroupCallInfo extends TdObject
{
    public const TYPE_NAME = 'groupCallInfo';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int    $groupCallId,
        /**
         * Join response payload for tgcalls; empty if the call isn't joined.
         */
        protected string $joinPayload
    ) {}

    public static function fromArray(array $array): GroupCallInfo
    {
        return new static(
            $array['group_call_id'],
            $array['join_payload'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getJoinPayload(): string
    {
        return $this->joinPayload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'join_payload'  => $this->joinPayload,
        ];
    }
}
