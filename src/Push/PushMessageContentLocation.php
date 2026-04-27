<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a location.
 */
class PushMessageContentLocation extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentLocation';

    public function __construct(
        /**
         * True, if the location is live.
         */
        protected bool $isLive,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentLocation
    {
        return new static(
            isLive  : $array['is_live'],
            isPinned: $array['is_pinned'],
        );
    }

    public function getIsLive(): bool
    {
        return $this->isLive;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsLive(bool $value): static
    {
        $this->isLive = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_live'   => $this->isLive,
            'is_pinned' => $this->isPinned,
        ];
    }
}
