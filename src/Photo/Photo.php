<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Photo;

use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a photo.
 */
class Photo extends TdObject
{
    public const string TYPE_NAME = 'photo';

    public function __construct(
        /**
         * True, if stickers were added to the photo. The list of corresponding sticker sets can be received using getAttachedStickerSets.
         */
        protected bool           $hasStickers,
        /**
         * Photo minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * Available variants of the photo, in different sizes.
         *
         * @var PhotoSize[]
         */
        protected array          $sizes,
    ) {}

    public static function fromArray(array $array): Photo
    {
        return new static(
            hasStickers  : $array['has_stickers'],
            minithumbnail: (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            sizes        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
        );
    }

    public function getHasStickers(): bool
    {
        return $this->hasStickers;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function setHasStickers(bool $value): static
    {
        $this->hasStickers = $value;

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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'has_stickers'  => $this->hasStickers,
            'minithumbnail' => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'sizes'         => array_map(static fn($x) => $x->jsonSerialize(), $this->sizes),
        ];
    }
}
