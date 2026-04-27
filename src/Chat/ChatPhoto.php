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
    public const string TYPE_NAME = 'chatPhoto';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the photo has been added.
         */
        protected int                $addedDate,
        /**
         * A big (up to 1280x1280) animated variant of the photo in MPEG4 format; may be null.
         */
        protected ?AnimatedChatPhoto $animation,
        /**
         * Unique photo identifier.
         */
        protected int                $id,
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
         * A small (160x160) animated variant of the photo in MPEG4 format; may be null even if the big animation is available.
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
            addedDate     : $array['added_date'],
            animation     : (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            id            : $array['id'],
            minithumbnail : (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            sizes         : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
            smallAnimation: (isset($array['small_animation']) ? TdSchemaRegistry::fromArray($array['small_animation']) : null),
            sticker       : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
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

    public function setAddedDate(int $value): static
    {
        $this->addedDate = $value;

        return $this;
    }

    public function setAnimation(?AnimatedChatPhoto $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setSizes(array $value): static
    {
        $this->sizes = $value;

        return $this;
    }

    public function setSmallAnimation(?AnimatedChatPhoto $value): static
    {
        $this->smallAnimation = $value;

        return $this;
    }

    public function setSticker(?ChatPhotoSticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'added_date'      => $this->addedDate,
            'animation'       => (null !== $this->animation ? $this->animation->jsonSerialize() : null),
            'id'              => $this->id,
            'minithumbnail'   => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'sizes'           => array_map(static fn($x) => $x->jsonSerialize(), $this->sizes),
            'small_animation' => (null !== $this->smallAnimation ? $this->smallAnimation->jsonSerialize() : null),
            'sticker'         => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
        ];
    }
}
