<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\TdFunction;

/**
 * Loads more participants of a group call. The loaded participants will be received through updates. Use the field groupCall.loaded_all_participants to check
 * whether all participants have already been loaded.
 */
class LoadGroupCallParticipants extends TdFunction
{
    public const TYPE_NAME = 'loadGroupCallParticipants';

    public function __construct(
        /**
         * Group call identifier. The group call must be previously received through getGroupCall and must be joined or being joined.
         */
        protected int $groupCallId,
        /**
         * The maximum number of participants to load; up to 100.
         */
        protected int $limit,
    ) {}

    public static function fromArray(array $array): LoadGroupCallParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['limit'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'limit'         => $this->limit,
        ];
    }
}
