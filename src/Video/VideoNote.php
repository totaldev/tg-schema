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
    public const TYPE_NAME = 'videoNote';

    public function __construct(
        /**
         * Duration of the video, in seconds; as defined by the sender.
         */
        protected int                      $duration,
        /**
         * A waveform representation of the video note's audio in 5-bit format; may be empty if unknown.
         */
        protected string                   $waveform,
        /**
         * Video width and height; as defined by the sender.
         */
        protected int                      $length,
        /**
         * Video minithumbnail; may be null.
         */
        protected ?Minithumbnail           $minithumbnail,
        /**
         * Video thumbnail in JPEG format; as defined by the sender; may be null.
         */
        protected ?Thumbnail               $thumbnail,
        /**
         * Result of speech recognition in the video note; may be null.
         */
        protected ?SpeechRecognitionResult $speechRecognitionResult,
        /**
         * File containing the video.
         */
        protected File                     $video,
    ) {}

    public static function fromArray(array $array): VideoNote
    {
        return new static(
            $array['duration'],
            $array['waveform'],
            $array['length'],
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            isset($array['speech_recognition_result']) ? TdSchemaRegistry::fromArray($array['speech_recognition_result']) : null,
            TdSchemaRegistry::fromArray($array['video']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'duration'                  => $this->duration,
            'waveform'                  => $this->waveform,
            'length'                    => $this->length,
            'minithumbnail'             => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'thumbnail'                 => (isset($this->thumbnail) ? $this->thumbnail : null),
            'speech_recognition_result' => (isset($this->speechRecognitionResult) ? $this->speechRecognitionResult : null),
            'video'                     => $this->video->typeSerialize(),
        ];
    }
}
