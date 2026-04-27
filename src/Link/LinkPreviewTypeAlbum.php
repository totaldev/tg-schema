<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a media album consisting of photos and videos.
 */
class LinkPreviewTypeAlbum extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeAlbum';

    public function __construct(
        /**
         * Album caption.
         */
        protected string $caption,
        /**
         * The list of album media.
         *
         * @var LinkPreviewAlbumMedia[]
         */
        protected array  $media,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeAlbum
    {
        return new static(
            caption: $array['caption'],
            media  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
        );
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function setCaption(string $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setMedia(array $value): static
    {
        $this->media = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'caption' => $this->caption,
            'media'   => array_map(static fn($x) => $x->jsonSerialize(), $this->media),
        ];
    }
}
