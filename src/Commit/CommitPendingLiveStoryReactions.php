<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Commit;

use Totaldev\TgSchema\TdFunction;

/**
 * Applies all pending paid reactions in a live story group call.
 */
class CommitPendingLiveStoryReactions extends TdFunction
{
    public const string TYPE_NAME = 'commitPendingLiveStoryReactions';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): CommitPendingLiveStoryReactions
    {
        return new static(
            groupCallId: $array['group_call_id'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }
}
