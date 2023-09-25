<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * A message with information about a venue
 */
class MessageVenue extends MessageContent
{
    public const TYPE_NAME = 'messageVenue';

    /**
     * The venue description
     *
     * @var Venue
     */
    protected Venue $venue;

    public function __construct(Venue $venue)
    {
        parent::__construct();

        $this->venue = $venue;
    }

    public static function fromArray(array $array): MessageVenue
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
