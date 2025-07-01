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
    public const TYPE_NAME = 'linkPreviewTypeAlbum';

    public function __construct(
        /**
         * The list of album media.
         *
         * @var LinkPreviewAlbumMedia[]
         */
        protected array  $media,
        /**
         * Album caption.
         */
        protected string $caption
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeAlbum
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            $array['caption'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'media'   => array_map(static fn($x) => $x->typeSerialize(), $this->media),
            'caption' => $this->caption,
        ];
    }
}
