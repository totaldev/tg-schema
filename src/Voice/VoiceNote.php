<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Voice;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a voice note. The voice note must be encoded with the Opus codec, and stored inside an OGG container. Voice notes can have only a single audio channel
 */
class VoiceNote extends TdObject
{
    public const TYPE_NAME = 'voiceNote';

    /**
     * Duration of the voice note, in seconds; as defined by the sender
     *
     * @var int
     */
    protected int $duration;

    /**
     * A waveform representation of the voice note in 5-bit format
     *
     * @var string
     */
    protected string $waveform;

    /**
     * MIME type of the file; as defined by the sender
     *
     * @var string
     */
    protected string $mimeType;

    /**
     * Result of speech recognition in the voice note; may be null
     *
     * @var SpeechRecognitionResult|null
     */
    protected ?SpeechRecognitionResult $speechRecognitionResult;

    /**
     * File containing the voice note
     *
     * @var File
     */
    protected File $voice;

    public function __construct(
        int $duration,
        string $waveform,
        string $mimeType,
        ?SpeechRecognitionResult $speechRecognitionResult,
        File $voice,
    ) {
        $this->duration = $duration;
        $this->waveform = $waveform;
        $this->mimeType = $mimeType;
        $this->speechRecognitionResult = $speechRecognitionResult;
        $this->voice = $voice;
    }

    public static function fromArray(array $array): VoiceNote
    {
        return new static(
            $array['duration'],
            $array['waveform'],
            $array['mime_type'],
            (isset($array['speech_recognition_result']) ? TdSchemaRegistry::fromArray($array['speech_recognition_result']) : null),
            TdSchemaRegistry::fromArray($array['voice']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'duration' => $this->duration,
            'waveform' => $this->waveform,
            'mime_type' => $this->mimeType,
            'speech_recognition_result' => (isset($this->speechRecognitionResult) ? $this->speechRecognitionResult : null),
            'voice' => $this->voice->typeSerialize(),
        ];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWaveform(): string
    {
        return $this->waveform;
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
}
