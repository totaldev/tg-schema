<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Voice;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Speech\SpeechRecognitionResult;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a voice note.
 */
class VoiceNote extends TdObject
{
    public const TYPE_NAME = 'voiceNote';

    public function __construct(
        /**
         * Duration of the voice note, in seconds; as defined by the sender.
         */
        protected int                      $duration,
        /**
         * A waveform representation of the voice note in 5-bit format.
         */
        protected string                   $waveform,
        /**
         * MIME type of the file; as defined by the sender. Usually, one of "audio/ogg" for Opus in an OGG container, "audio/mpeg" for an MP3 audio, or "audio/mp4" for an M4A audio.
         */
        protected string                   $mimeType,
        /**
         * Result of speech recognition in the voice note; may be null.
         */
        protected ?SpeechRecognitionResult $speechRecognitionResult,
        /**
         * File containing the voice note.
         */
        protected File                     $voice,
    ) {}

    public static function fromArray(array $array): VoiceNote
    {
        return new static(
            $array['duration'],
            $array['waveform'],
            $array['mime_type'],
            isset($array['speech_recognition_result']) ? TdSchemaRegistry::fromArray($array['speech_recognition_result']) : null,
            TdSchemaRegistry::fromArray($array['voice']),
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getSpeechRecognitionResult(): ?SpeechRecognitionResult
    {
        return $this->speechRecognitionResult;
    }

    public function getVoice(): File
    {
        return $this->voice;
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
            'mime_type'                 => $this->mimeType,
            'speech_recognition_result' => $this->speechRecognitionResult ?? null,
            'voice'                     => $this->voice->typeSerialize(),
        ];
    }
}
