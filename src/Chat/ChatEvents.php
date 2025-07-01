<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat events.
 */
class ChatEvents extends TdObject
{
    public const TYPE_NAME = 'chatEvents';

    public function __construct(
        /**
         * List of events.
         *
         * @var ChatEvent[]
         */
        protected array $events
    ) {}

    public static function fromArray(array $array): ChatEvents
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['events']),
        );
    }

    public function getEvents(): array
    {
        return $this->events;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'events' => array_map(static fn($x) => $x->typeSerialize(), $this->events),
        ];
    }
}
