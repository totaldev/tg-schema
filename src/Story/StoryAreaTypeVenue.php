<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * An area pointing to a venue
 */
class StoryAreaTypeVenue extends StoryAreaType
{
    public const TYPE_NAME = 'storyAreaTypeVenue';

    /**
     * Information about the venue
     *
     * @var Venue
     */
    protected Venue $venue;

    public function __construct(Venue $venue)
    {
        parent::__construct();

        $this->venue = $venue;
    }

    public static function fromArray(array $array): StoryAreaTypeVenue
    {
        return new static(
            TdSchemaRegistry::fromArray($array['venue']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'venue' => $this->venue->typeSerialize(),
        ];
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }
}
