<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * A message with information about a venue.
 */
class InputMessageVenue extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVenue';

    public function __construct(
        /**
         * Venue to send.
         */
        protected Venue $venue
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageVenue
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
