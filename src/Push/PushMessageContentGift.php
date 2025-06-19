<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a gift.
 */
class PushMessageContentGift extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGift';

    public function __construct(
        /**
         * Number of Telegram Stars that sender paid for the gift.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGift
    {
        return new static(
            $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
        ];
    }
}
