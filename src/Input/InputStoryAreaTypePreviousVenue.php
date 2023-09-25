<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a venue already added to the story
 */
class InputStoryAreaTypePreviousVenue extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypePreviousVenue';

    /**
     * Provider of the venue
     *
     * @var string
     */
    protected string $venueProvider;

    /**
     * Identifier of the venue in the provider database
     *
     * @var string
     */
    protected string $venueId;

    public function __construct(string $venueProvider, string $venueId)
    {
        parent::__construct();

        $this->venueProvider = $venueProvider;
        $this->venueId = $venueId;
    }

    public static function fromArray(array $array): InputStoryAreaTypePreviousVenue
    {
        return new static(
            $array['venue_provider'],
            $array['venue_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'venue_provider' => $this->venueProvider,
            'venue_id' => $this->venueId,
        ];
    }

    public function getVenueProvider(): string
    {
        return $this->venueProvider;
    }

    public function getVenueId(): string
    {
        return $this->venueId;
    }
}
