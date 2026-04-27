<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * The media is a photo.
 */
class PaidMediaPhoto extends PaidMedia
{
    public const string TYPE_NAME = 'paidMediaPhoto';

    public function __construct(
        /**
         * The photo.
         */
        protected Photo  $photo,
        /**
         * The video representing the live photo; may be null if the photo is static.
         */
        protected ?Video $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidMediaPhoto
    {
        return new static(
            photo: TdSchemaRegistry::fromArray($array['photo']),
            video: (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
        );
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function setPhoto(Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setVideo(?Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->jsonSerialize(),
            'video' => (null !== $this->video ? $this->video->jsonSerialize() : null),
        ];
    }
}
