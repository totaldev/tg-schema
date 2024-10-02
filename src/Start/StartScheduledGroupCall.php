<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\TdFunction;

/**
 * Starts a scheduled group call.
 */
class StartScheduledGroupCall extends TdFunction
{
    public const TYPE_NAME = 'startScheduledGroupCall';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): StartScheduledGroupCall
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
