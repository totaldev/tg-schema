<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * Describes album of stories.
 */
class StoryAlbum extends TdObject
{
    public const TYPE_NAME = 'storyAlbum';

    public function __construct(
        /**
         * Unique identifier of the album.
         */
        protected int    $id,
        /**
         * Name of the album.
         */
        protected string $name,
        /**
         * Icon of the album; may be null if none.
         */
        protected ?Photo $photoIcon,
        /**
         * Video icon of the album; may be null if none.
         */
        protected ?Video $videoIcon,
    ) {}

    public static function fromArray(array $array): StoryAlbum
    {
        return new static(
            $array['id'],
            $array['name'],
            isset($array['photo_icon']) ? TdSchemaRegistry::fromArray($array['photo_icon']) : null,
            isset($array['video_icon']) ? TdSchemaRegistry::fromArray($array['video_icon']) : null,
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
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
            'id'         => $this->id,
            'name'       => $this->name,
            'photo_icon' => $this->photoIcon ?? null,
            'video_icon' => $this->videoIcon ?? null,
        ];
    }
}
