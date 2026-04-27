<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a sticker.
 */
class PushMessageContentSticker extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentSticker';

    public function __construct(
        /**
         * Emoji corresponding to the sticker; may be empty.
         */
        protected string   $emoji,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool     $isPinned,
        /**
         * Message content; may be null.
         */
        protected ?Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentSticker
    {
        return new static(
            emoji   : $array['emoji'],
            isPinned: $array['is_pinned'],
            sticker : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'emoji'     => $this->emoji,
            'is_pinned' => $this->isPinned,
            'sticker'   => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
        ];
    }
}
