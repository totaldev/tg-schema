<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\End;

use Totaldev\TgSchema\TdFunction;

/**
 * Ends screen sharing in a joined group call; not supported in live stories.
 */
class EndGroupCallScreenSharing extends TdFunction
{
    public const string TYPE_NAME = 'endGroupCallScreenSharing';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): EndGroupCallScreenSharing
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
