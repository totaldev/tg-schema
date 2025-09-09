<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Time;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a time zone.
 */
class TimeZone extends TdObject
{
    public const TYPE_NAME = 'timeZone';

    public function __construct(
        /**
         * Unique time zone identifier.
         */
        protected string $id,
        /**
         * Time zone name.
         */
        protected string $name,
        /**
         * Current UTC time offset for the time zone.
         */
        protected int    $utcTimeOffset,
    ) {}

    public static function fromArray(array $array): TimeZone
    {
        return new static(
            $array['id'],
            $array['name'],
            $array['utc_time_offset'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUtcTimeOffset(): int
    {
        return $this->utcTimeOffset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'id'              => $this->id,
            'name'            => $this->name,
            'utc_time_offset' => $this->utcTimeOffset,
        ];
    }
}
