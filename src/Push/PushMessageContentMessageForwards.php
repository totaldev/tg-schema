<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A forwarded messages.
 */
class PushMessageContentMessageForwards extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentMessageForwards';

    public function __construct(
        /**
         * Number of forwarded messages.
         */
        protected int $totalCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentMessageForwards
    {
        return new static(
            $array['total_count'],
        );
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
        ];
    }
}
