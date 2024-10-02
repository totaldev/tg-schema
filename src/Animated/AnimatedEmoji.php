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
    public const TYPE_NAME = 'animatedEmoji';

    public function __construct(
        /**
         * Sticker for the emoji; may be null if yet unknown for a custom emoji. If the sticker is a custom emoji, then it can have arbitrary format.
         */
        protected ?Sticker $sticker,
        /**
         * Expected width of the sticker, which can be used if the sticker is null.
         */
        protected int      $stickerWidth,
        /**
         * Expected height of the sticker, which can be used if the sticker is null.
         */
        protected int      $stickerHeight,
        /**
         * Emoji modifier fitzpatrick type; 0-6; 0 if none.
         */
        protected int      $fitzpatrickType,
        /**
         * File containing the sound to be played when the sticker is clicked; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container.
         */
        protected ?File    $sound,
    ) {}

    public static function fromArray(array $array): AnimatedEmoji
    {
        return new static(
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
            $array['sticker_width'],
            $array['sticker_height'],
            $array['fitzpatrick_type'],
            isset($array['sound']) ? TdSchemaRegistry::fromArray($array['sound']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'sticker'          => (isset($this->sticker) ? $this->sticker : null),
            'sticker_width'    => $this->stickerWidth,
            'sticker_height'   => $this->stickerHeight,
            'fitzpatrick_type' => $this->fitzpatrickType,
            'sound'            => (isset($this->sound) ? $this->sound : null),
        ];
    }
}
