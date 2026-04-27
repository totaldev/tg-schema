<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\Speech\SpeechRecognitionResult;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes a video note. The video must be equal in width and height, cropped to a circle, and stored in MPEG4 format.
 */
class VideoNote extends TdObject
{
    public const string TYPE_NAME = 'videoNote';

    public function __construct(
        /**
         * Duration of the video, in seconds; as defined by the sender.
         */
        protected int                      $duration,
        /**
         * Video width and height; as defined by the sender.
         */
        protected int                      $length,
        /**
         * Video minithumbnail; may be null.
         */
        protected ?Minithumbnail           $minithumbnail,
        /**
         * Result of speech recognition in the video note; may be null.
         */
        protected ?SpeechRecognitionResult $speechRecognitionResult,
        /**
         * Video thumbnail in JPEG format; as defined by the sender; may be null.
         */
        protected ?Thumbnail               $thumbnail,
        /**
         * File containing the video.
         */
        protected File                     $video,
        /**
         * A waveform representation of the video note's audio in 5-bit format; may be empty if unknown.
         */
        protected string                   $waveform,
    ) {}

    public static function fromArray(array $array): VideoNote
    {
        return new static(
            duration               : $array['duration'],
            length                 : $array['length'],
            minithumbnail          : (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            speechRecognitionResult: (isset($array['speech_recognition_result']) ? TdSchemaRegistry::fromArray($array['speech_recognition_result']) : null),
            thumbnail              : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            video                  : TdSchemaRegistry::fromArray($array['video']),
            waveform               : $array['waveform'],
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSpeechRecognitionResult(): ?SpeechRecognitionResult
    {
        return $this->speechRecognitionResult;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getVideo(): File
    {
        return $this->video;
    }

    public function getWaveform(): string
    {
        return $this->waveform;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setSpeechRecognitionResult(?SpeechRecognitionResult $value): static
    {
        $this->speechRecognitionResult = $value;

        return $this;
    }

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setVideo(File $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function setWaveform(string $value): static
    {
        $this->waveform = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'duration'                  => $this->duration,
            'length'                    => $this->length,
            'minithumbnail'             => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'speech_recognition_result' => (null !== $this->speechRecognitionResult ? $this->speechRecognitionResult->jsonSerialize() : null),
            'thumbnail'                 => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'video'                     => $this->video->jsonSerialize(),
            'waveform'                  => $this->waveform,
        ];
    }
}
