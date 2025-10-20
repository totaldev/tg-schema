<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The link is a link to an album of stories.
 */
class LinkPreviewTypeStoryAlbum extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeStoryAlbum';

    public function __construct(
        /**
         * Icon of the album; may be null if none.
         */
        protected ?Photo $photoIcon,
        /**
         * Video icon of the album; may be null if none.
         */
        protected ?Video $videoIcon,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeStoryAlbum
    {
        return new static(
            isset($array['photo_icon']) ? TdSchemaRegistry::fromArray($array['photo_icon']) : null,
            isset($array['video_icon']) ? TdSchemaRegistry::fromArray($array['video_icon']) : null,
        );
    }

    public function getPhotoIcon(): ?Photo
    {
        return $this->photoIcon;
    }

    public function getVideoIcon(): ?Video
    {
        return $this->videoIcon;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'photo_icon' => $this->photoIcon ?? null,
            'video_icon' => $this->videoIcon ?? null,
        ];
    }
}
