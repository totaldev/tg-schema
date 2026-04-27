<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker message.
 */
class InputMessageSticker extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageSticker';

    public function __construct(
        /**
         * Emoji used to choose the sticker.
         */
        protected string          $emoji,
        /**
         * Sticker height.
         */
        protected int             $height,
        /**
         * Sticker to be sent.
         */
        protected InputFile       $sticker,
        /**
         * Sticker width.
         */
        protected int             $width,
        /**
         * Sticker thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail $thumbnail = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageSticker
    {
        return new static(
            emoji    : $array['emoji'],
            height   : $array['height'],
            sticker  : TdSchemaRegistry::fromArray($array['sticker']),
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            width    : $array['width'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setSticker(InputFile $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setThumbnail(?InputThumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'emoji'     => $this->emoji,
            'height'    => $this->height,
            'sticker'   => $this->sticker->jsonSerialize(),
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'width'     => $this->width,
        ];
    }
}
