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
 * Describes an animated or custom representation of an emoji
 */
class AnimatedEmoji extends TdObject
{
    public const TYPE_NAME = 'animatedEmoji';

    /**
     * Sticker for the emoji; may be null if yet unknown for a custom emoji. If the sticker is a custom emoji, it can have arbitrary format different from stickerFormatTgs
     *
     * @var Sticker|null
     */
    protected ?Sticker $sticker;

    /**
     * Expected width of the sticker, which can be used if the sticker is null
     *
     * @var int
     */
    protected int $stickerWidth;

    /**
     * Expected height of the sticker, which can be used if the sticker is null
     *
     * @var int
     */
    protected int $stickerHeight;

    /**
     * Emoji modifier fitzpatrick type; 0-6; 0 if none
     *
     * @var int
     */
    protected int $fitzpatrickType;

    /**
     * File containing the sound to be played when the sticker is clicked; may be null. The sound is encoded with the Opus codec, and stored inside an OGG container
     *
     * @var File|null
     */
    protected ?File $sound;

    public function __construct(
        ?Sticker $sticker,
        int $stickerWidth,
        int $stickerHeight,
        int $fitzpatrickType,
        ?File $sound,
    ) {
        $this->sticker = $sticker;
        $this->stickerWidth = $stickerWidth;
        $this->stickerHeight = $stickerHeight;
        $this->fitzpatrickType = $fitzpatrickType;
        $this->sound = $sound;
    }

    public static function fromArray(array $array): AnimatedEmoji
    {
        return new static(
            (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            $array['sticker_width'],
            $array['sticker_height'],
            $array['fitzpatrick_type'],
            (isset($array['sound']) ? TdSchemaRegistry::fromArray($array['sound']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => (isset($this->sticker) ? $this->sticker : null),
            'sticker_width' => $this->stickerWidth,
            'sticker_height' => $this->stickerHeight,
            'fitzpatrick_type' => $this->fitzpatrickType,
            'sound' => (isset($this->sound) ? $this->sound : null),
        ];
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getStickerWidth(): int
    {
        return $this->stickerWidth;
    }

    public function getStickerHeight(): int
    {
        return $this->stickerHeight;
    }

    public function getFitzpatrickType(): int
    {
        return $this->fitzpatrickType;
    }

    public function getSound(): ?File
    {
        return $this->sound;
    }
}
