<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about available video chat streams.
 */
class GetVideoChatStreams extends TdFunction
{
    public const string TYPE_NAME = 'getVideoChatStreams';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId,
    ) {}

    public static function fromArray(array $array): GetVideoChatStreams
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
