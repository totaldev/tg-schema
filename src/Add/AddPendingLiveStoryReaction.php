<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds pending paid reaction in a live story group call. Can't be used in live stories posted by the current user. Call commitPendingLiveStoryReactions or
 * removePendingLiveStoryReactions to actually send all pending reactions when the undo timer is over or abort the sending.
 */
class AddPendingLiveStoryReaction extends TdFunction
{
    public const string TYPE_NAME = 'addPendingLiveStoryReaction';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId,
        /**
         * Number of Telegram Stars to be used for the reaction. The total number of pending paid reactions must not exceed getOption("paid_group_call_message_star_count_max").
         */
        protected int $starCount,
    ) {}

    public static function fromArray(array $array): AddPendingLiveStoryReaction
    {
        return new static(
            groupCallId: $array['group_call_id'],
            starCount  : $array['star_count'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'star_count'    => $this->starCount,
        ];
    }
}
