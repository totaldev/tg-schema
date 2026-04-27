<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Animated;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an animated or custom representation of an emoji.
 */
class AnimatedEmoji extends TdObject
{
    public const string TYPE_NAME = 'animatedEmoji';

    public function __construct(
        /**
         * Emoji modifier fitzpatrick type; 0-6; 0 if none.
         */
        protected int      $fitzpatrickType,
        /**
         * File containing the sound to be played when the sticker is clicked; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container.
         */
        protected ?File    $sound,
        /**
         * Sticker for the emoji; may be null if yet unknown for a custom emoji. If the sticker is a custom emoji, then it can have arbitrary format.
         */
        protected ?Sticker $sticker,
        /**
         * Expected height of the sticker, which can be used if the sticker is null.
         */
        protected int      $stickerHeight,
        /**
         * Expected width of the sticker, which can be used if the sticker is null.
         */
        protected int      $stickerWidth,
    ) {}

    public static function fromArray(array $array): AnimatedEmoji
    {
        return new static(
            fitzpatrickType: $array['fitzpatrick_type'],
            sound          : (isset($array['sound']) ? TdSchemaRegistry::fromArray($array['sound']) : null),
            sticker        : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            stickerHeight  : $array['sticker_height'],
            stickerWidth   : $array['sticker_width'],
        );
    }

    public function getFitzpatrickType(): int
    {
        return $this->fitzpatrickType;
    }

    public function getSound(): ?File
    {
        return $this->sound;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getStickerHeight(): int
    {
        return $this->stickerHeight;
    }

    public function getStickerWidth(): int
    {
        return $this->stickerWidth;
    }

    public function setFitzpatrickType(int $value): static
    {
        $this->fitzpatrickType = $value;

        return $this;
    }

    public function setSound(?File $value): static
    {
        $this->sound = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setStickerHeight(int $value): static
    {
        $this->stickerHeight = $value;

        return $this;
    }

    public function setStickerWidth(int $value): static
    {
        $this->stickerWidth = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'fitzpatrick_type' => $this->fitzpatrickType,
            'sound'            => (null !== $this->sound ? $this->sound->jsonSerialize() : null),
            'sticker'          => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'sticker_height'   => $this->stickerHeight,
            'sticker_width'    => $this->stickerWidth,
        ];
    }
}
