<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a point on the map
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultLocation';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Location result
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Result thumbnail in JPEG format; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    /**
     * Title of the result
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $id, Location $location, string $title, ?Thumbnail $thumbnail)
    {
        parent::__construct();

        $this->id = $id;
        $this->location = $location;
        $this->title = $title;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultLocation
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['location']),
            $array['title'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'location' => $this->location->typeSerialize(),
            'title' => $this->title,
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }
}
