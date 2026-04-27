<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a point on the map.
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultLocation';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string     $id,
        /**
         * Location result.
         */
        protected Location   $location,
        /**
         * Result thumbnail in JPEG format; may be null.
         */
        protected ?Thumbnail $thumbnail,
        /**
         * Title of the result.
         */
        protected string     $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultLocation
    {
        return new static(
            id       : $array['id'],
            location : TdSchemaRegistry::fromArray($array['location']),
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            title    : $array['title'],
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

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setLocation(Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'location'  => $this->location->jsonSerialize(),
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'title'     => $this->title,
        ];
    }
}
