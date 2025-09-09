<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A new incoming event; for bots only.
 */
class UpdateNewCustomEvent extends Update
{
    public const TYPE_NAME = 'updateNewCustomEvent';

    public function __construct(
        /**
         * A JSON-serialized event.
         */
        protected string $event
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewCustomEvent
    {
        return new static(
            $array['event'],
        );
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'event' => $this->event,
        ];
    }
}
