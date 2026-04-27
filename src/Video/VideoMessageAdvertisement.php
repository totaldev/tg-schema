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
    public const string TYPE_NAME = 'videoMessageAdvertisement';

    public function __construct(
        /**
         * If non-empty, additional information about the sponsored message to be shown along with the message.
         */
        protected string               $additionalInfo,
        /**
         * True, if the advertisement can be reported to Telegram moderators through reportVideoMessageAdvertisement.
         */
        protected bool                 $canBeReported,
        /**
         * The maximum amount of time the advertisement must be displayed before it must be automatically hidden, in seconds.
         */
        protected int                  $maxDisplayDuration,
        /**
         * The minimum amount of time the advertisement must be displayed before it can be hidden by the user, in seconds.
         */
        protected int                  $minDisplayDuration,
        /**
         * Information about the sponsor of the advertisement.
         */
        protected AdvertisementSponsor $sponsor,
        /**
         * Text of the advertisement.
         */
        protected string               $text,
        /**
         * Title of the sponsored message.
         */
        protected string               $title,
        /**
         * Unique identifier of this result.
         */
        protected int                  $uniqueId,
    ) {}

    public static function fromArray(array $array): VideoMessageAdvertisement
    {
        return new static(
            additionalInfo    : $array['additional_info'],
            canBeReported     : $array['can_be_reported'],
            maxDisplayDuration: $array['max_display_duration'],
            minDisplayDuration: $array['min_display_duration'],
            sponsor           : TdSchemaRegistry::fromArray($array['sponsor']),
            text              : $array['text'],
            title             : $array['title'],
            uniqueId          : $array['unique_id'],
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

    public function setAdditionalInfo(string $value): static
    {
        $this->additionalInfo = $value;

        return $this;
    }

    public function setCanBeReported(bool $value): static
    {
        $this->canBeReported = $value;

        return $this;
    }

    public function setMaxDisplayDuration(int $value): static
    {
        $this->maxDisplayDuration = $value;

        return $this;
    }

    public function setMinDisplayDuration(int $value): static
    {
        $this->minDisplayDuration = $value;

        return $this;
    }

    public function setSponsor(AdvertisementSponsor $value): static
    {
        $this->sponsor = $value;

        return $this;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setUniqueId(int $value): static
    {
        $this->uniqueId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'additional_info'      => $this->additionalInfo,
            'can_be_reported'      => $this->canBeReported,
            'max_display_duration' => $this->maxDisplayDuration,
            'min_display_duration' => $this->minDisplayDuration,
            'sponsor'              => $this->sponsor->jsonSerialize(),
            'text'                 => $this->text,
            'title'                => $this->title,
            'unique_id'            => $this->uniqueId,
        ];
    }
}
