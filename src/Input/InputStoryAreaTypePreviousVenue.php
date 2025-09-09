<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An area pointing to a venue already added to the story.
 */
class InputStoryAreaTypePreviousVenue extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypePreviousVenue';

    public function __construct(
        /**
         * Provider of the venue.
         */
        protected string $venueProvider,
        /**
         * Identifier of the venue in the provider database.
         */
        protected string $venueId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypePreviousVenue
    {
        return new static(
            $array['venue_provider'],
            $array['venue_id'],
        );
    }

    public function getVenueId(): string
    {
        return $this->venueId;
    }

    public function getVenueProvider(): string
    {
        return $this->venueProvider;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'venue_provider' => $this->venueProvider,
            'venue_id'       => $this->venueId,
        ];
    }
}
