<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * An area pointing to a venue.
 */
class StoryAreaTypeVenue extends StoryAreaType
{
    public const TYPE_NAME = 'storyAreaTypeVenue';

    public function __construct(
        /**
         * Information about the venue.
         */
        protected Venue $venue
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeVenue
    {
        return new static(
            TdSchemaRegistry::fromArray($array['venue']),
        );
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'venue' => $this->venue->typeSerialize(),
        ];
    }
}
