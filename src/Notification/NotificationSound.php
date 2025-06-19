<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a notification sound in MP3 format.
 */
class NotificationSound extends TdObject
{
    public const TYPE_NAME = 'notificationSound';

    public function __construct(
        /**
         * Unique identifier of the notification sound.
         */
        protected int    $id,
        /**
         * Duration of the sound, in seconds.
         */
        protected int    $duration,
        /**
         * Point in time (Unix timestamp) when the sound was created.
         */
        protected int    $date,
        /**
         * Title of the notification sound.
         */
        protected string $title,
        /**
         * Arbitrary data, defined while the sound was uploaded.
         */
        protected string $data,
        /**
         * File containing the sound.
         */
        protected File   $sound
    ) {}

    public static function fromArray(array $array): NotificationSound
    {
        return new static(
            $array['id'],
            $array['duration'],
            $array['date'],
            $array['title'],
            $array['data'],
            TdSchemaRegistry::fromArray($array['sound']),
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSound(): File
    {
        return $this->sound;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'id'       => $this->id,
            'duration' => $this->duration,
            'date'     => $this->date,
            'title'    => $this->title,
            'data'     => $this->data,
            'sound'    => $this->sound->typeSerialize(),
        ];
    }
}
