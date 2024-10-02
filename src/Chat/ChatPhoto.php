<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Animated\AnimatedChatPhoto;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\Photo\PhotoSize;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a chat or user profile photo.
 */
class ChatPhoto extends TdObject
{
    public const TYPE_NAME = 'chatPhoto';

    public function __construct(
        /**
         * Unique photo identifier.
         */
        protected int                $id,
        /**
         * Point in time (Unix timestamp) when the photo has been added.
         */
        protected int                $addedDate,
        /**
         * Photo minithumbnail; may be null.
         */
        protected ?Minithumbnail     $minithumbnail,
        /**
         * Available variants of the photo in JPEG format, in different size.
         *
         * @var PhotoSize[]
         */
        protected array              $sizes,
        /**
         * A big (up to 1280x1280) animated variant of the photo in MPEG4 format; may be null.
         */
        protected ?AnimatedChatPhoto $animation,
        /**
         * A small (160x160) animated variant of the photo in MPEG4 format; may be null even the big animation is available.
         */
        protected ?AnimatedChatPhoto $smallAnimation,
        /**
         * Sticker-based version of the chat photo; may be null.
         */
        protected ?ChatPhotoSticker  $sticker,
    ) {}

    public static function fromArray(array $array): ChatPhoto
    {
        return new static(
            $array['id'],
            $array['added_date'],
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
            isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null,
            isset($array['small_animation']) ? TdSchemaRegistry::fromArray($array['small_animation']) : null,
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getAddedDate(): int
    {
        return $this->addedDate;
    }

    public function getAnimation(): ?AnimatedChatPhoto
    {
        return $this->animation;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function getSmallAnimation(): ?AnimatedChatPhoto
    {
        return $this->smallAnimation;
    }

    public function getSticker(): ?ChatPhotoSticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'added_date'      => $this->addedDate,
            'minithumbnail'   => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            array_map(fn($x) => $x->typeSerialize(), $this->sizes),
            'animation'       => (isset($this->animation) ? $this->animation : null),
            'small_animation' => (isset($this->smallAnimation) ? $this->smallAnimation : null),
            'sticker'         => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}
