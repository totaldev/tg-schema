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
    public const string TYPE_NAME = 'inputStoryAreaTypePreviousVenue';

    public function __construct(
        /**
         * Identifier of the venue in the provider database.
         */
        protected string $venueId,
        /**
         * Provider of the venue.
         */
        protected string $venueProvider,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypePreviousVenue
    {
        return new static(
            venueId      : $array['venue_id'],
            venueProvider: $array['venue_provider'],
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

    public function setVenueId(string $value): static
    {
        $this->venueId = $value;

        return $this;
    }

    public function setVenueProvider(string $value): static
    {
        $this->venueProvider = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'venue_id'       => $this->venueId,
            'venue_provider' => $this->venueProvider,
        ];
    }
}
