<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of top live story donors.
 */
class GetLiveStoryTopDonors extends TdFunction
{
    public const string TYPE_NAME = 'getLiveStoryTopDonors';

    public function __construct(
        /**
         * Group call identifier of the live story.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): GetLiveStoryTopDonors
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
