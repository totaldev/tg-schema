<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the minimum number of Telegram Stars that must be paid by general participant for each sent message to a live story call. Requires
 * groupCall.can_be_managed right.
 */
class SetGroupCallPaidMessageStarCount extends TdFunction
{
    public const string TYPE_NAME = 'setGroupCallPaidMessageStarCount';

    public function __construct(
        /**
         * Group call identifier; must be an identifier of a live story call.
         */
        protected int $groupCallId,
        /**
         * The new minimum number of Telegram Stars; 0-getOption("paid_group_call_message_star_count_max").
         */
        protected int $paidMessageStarCount,
    ) {}

    public static function fromArray(array $array): SetGroupCallPaidMessageStarCount
    {
        return new static(
            groupCallId         : $array['group_call_id'],
            paidMessageStarCount: $array['paid_message_star_count'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'group_call_id'           => $this->groupCallId,
            'paid_message_star_count' => $this->paidMessageStarCount,
        ];
    }
}
