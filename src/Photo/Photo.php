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
    public const TYPE_NAME = 'photo';

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
        protected array          $sizes
    ) {}

    public static function fromArray(array $array): Photo
    {
        return new static(
            $array['has_stickers'],
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'has_stickers'  => $this->hasStickers,
            'minithumbnail' => $this->minithumbnail ?? null,
            array_map(static fn($x) => $x->typeSerialize(), $this->sizes),
        ];
    }
}
