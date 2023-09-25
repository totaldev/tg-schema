<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * Represents a video
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultVideo';

    /**
     * Description of the video
     *
     * @var string
     */
    protected string $description;

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the video
     *
     * @var string
     */
    protected string $title;

    /**
     * Video
     *
     * @var Video
     */
    protected Video $video;

    public function __construct(string $id, Video $video, string $title, string $description)
    {
        parent::__construct();

        $this->id = $id;
        $this->video = $video;
        $this->title = $title;
        $this->description = $description;
    }

    public static function fromArray(array $array): InlineQueryResultVideo
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['video']),
            $array['title'],
            $array['description'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'video' => $this->video->typeSerialize(),
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}
