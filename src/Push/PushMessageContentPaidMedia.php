<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with paid media.
 */
class PushMessageContentPaidMedia extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentPaidMedia';

    public function __construct(
        /**
         * Number of Telegram Stars needed to buy access to the media in the message; 0 for pinned message.
         */
        protected int  $starCount,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPaidMedia
    {
        return new static(
            $array['star_count'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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
            'is_pinned'  => $this->isPinned,
        ];
    }
}
