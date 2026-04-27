<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * Represents a video.
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultVideo';

    public function __construct(
        /**
         * Description of the video.
         */
        protected string $description,
        /**
         * Unique identifier of the query result.
         */
        protected string $id,
        /**
         * Title of the video.
         */
        protected string $title,
        /**
         * Video.
         */
        protected Video  $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultVideo
    {
        return new static(
            description: $array['description'],
            id         : $array['id'],
            title      : $array['title'],
            video      : TdSchemaRegistry::fromArray($array['video']),
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setVideo(Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'description' => $this->description,
            'id'          => $this->id,
            'title'       => $this->title,
            'video'       => $this->video->jsonSerialize(),
        ];
    }
}
