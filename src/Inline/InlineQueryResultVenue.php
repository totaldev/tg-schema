<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;
use Totaldev\TgSchema\Venue\Venue;

/**
 * Represents information about a venue.
 */
class InlineQueryResultVenue extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultVenue';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string     $id,
        /**
         * Venue result.
         */
        protected Venue      $venue,
        /**
         * Result thumbnail in JPEG format; may be null.
         */
        protected ?Thumbnail $thumbnail
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultVenue
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['venue']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'venue'     => $this->venue->typeSerialize(),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }
}
