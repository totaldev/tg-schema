<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\Advertisement\AdvertisementSponsor;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an advertisent to be shown while a video from a message is watched.
 */
class VideoMessageAdvertisement extends TdObject
{
    public const TYPE_NAME = 'videoMessageAdvertisement';

    public function __construct(
        /**
         * Unique identifier of this result.
         */
        protected int                  $uniqueId,
        /**
         * Text of the advertisement.
         */
        protected string               $text,
        /**
         * The minimum amount of time the advertisement must be displayed before it can be hidden by the user, in seconds.
         */
        protected int                  $minDisplayDuration,
        /**
         * The maximum amount of time the advertisement must be displayed before it must be automatically hidden, in seconds.
         */
        protected int                  $maxDisplayDuration,
        /**
         * True, if the advertisement can be reported to Telegram moderators through reportVideoMessageAdvertisement.
         */
        protected bool                 $canBeReported,
        /**
         * Information about the sponsor of the advertisement.
         */
        protected AdvertisementSponsor $sponsor,
        /**
         * Title of the sponsored message.
         */
        protected string               $title,
        /**
         * If non-empty, additional information about the sponsored message to be shown along with the message.
         */
        protected string               $additionalInfo,
    ) {}

    public static function fromArray(array $array): VideoMessageAdvertisement
    {
        return new static(
            $array['unique_id'],
            $array['text'],
            $array['min_display_duration'],
            $array['max_display_duration'],
            $array['can_be_reported'],
            TdSchemaRegistry::fromArray($array['sponsor']),
            $array['title'],
            $array['additional_info'],
        );
    }

    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    public function getMaxDisplayDuration(): int
    {
        return $this->maxDisplayDuration;
    }

    public function getMinDisplayDuration(): int
    {
        return $this->minDisplayDuration;
    }

    public function getSponsor(): AdvertisementSponsor
    {
        return $this->sponsor;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'unique_id'            => $this->uniqueId,
            'text'                 => $this->text,
            'min_display_duration' => $this->minDisplayDuration,
            'max_display_duration' => $this->maxDisplayDuration,
            'can_be_reported'      => $this->canBeReported,
            'sponsor'              => $this->sponsor->typeSerialize(),
            'title'                => $this->title,
            'additional_info'      => $this->additionalInfo,
        ];
    }
}
