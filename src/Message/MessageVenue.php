<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * A message with information about a venue.
 */
class MessageVenue extends MessageContent
{
    public const string TYPE_NAME = 'messageVenue';

    public function __construct(
        /**
         * The venue description.
         */
        protected Venue $venue
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVenue
    {
        return new static(
            TdSchemaRegistry::fromArray($array['venue']),
        );
    }

    public function getVenue(): Venue
    {
        return $this->venue;
    }

    public function setVenue(Venue $value): static
    {
        $this->venue = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'venue' => $this->venue->typeSerialize(),
        ];
    }
}
