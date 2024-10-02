<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\End;

use Totaldev\TgSchema\TdFunction;

/**
 * Ends recording of an active group call. Requires groupCall.can_be_managed group call flag.
 */
class EndGroupCallRecording extends TdFunction
{
    public const TYPE_NAME = 'endGroupCallRecording';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): EndGroupCallRecording
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }
}
