<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\TdFunction;

/**
 * Starts a scheduled video chat.
 */
class StartScheduledVideoChat extends TdFunction
{
    public const TYPE_NAME = 'startScheduledVideoChat';

    public function __construct(
        /**
         * Group call identifier of the video chat.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): StartScheduledVideoChat
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
