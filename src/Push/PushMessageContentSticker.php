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
    public const TYPE_NAME = 'pushMessageContentSticker';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?Sticker $sticker,
        /**
         * Emoji corresponding to the sticker; may be empty.
         */
        protected string   $emoji,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool     $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentSticker
    {
        return new static(
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
            $array['emoji'],
            $array['is_pinned'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'sticker'   => (isset($this->sticker) ? $this->sticker : null),
            'emoji'     => $this->emoji,
            'is_pinned' => $this->isPinned,
        ];
    }
}
