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
    public const string TYPE_NAME = 'pushMessageContentPaidMedia';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool $isPinned,
        /**
         * Number of Telegram Stars needed to buy access to the media in the message; 0 for pinned message.
         */
        protected int  $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPaidMedia
    {
        return new static(
            isPinned : $array['is_pinned'],
            starCount: $array['star_count'],
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_pinned'  => $this->isPinned,
            'star_count' => $this->starCount,
        ];
    }
}
