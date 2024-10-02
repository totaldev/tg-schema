<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about available group call streams.
 */
class GetGroupCallStreams extends TdFunction
{
    public const TYPE_NAME = 'getGroupCallStreams';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): GetGroupCallStreams
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
