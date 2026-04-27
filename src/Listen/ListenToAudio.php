<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Listen;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that an audio was listened by the user.
 */
class ListenToAudio extends TdFunction
{
    public const string TYPE_NAME = 'listenToAudio';

    public function __construct(
        /**
         * Identifier of the file with an audio.
         */
        protected int $audioFileId,
        /**
         * Duration of the listening to the audio, in seconds.
         */
        protected int $duration,
    ) {}

    public static function fromArray(array $array): ListenToAudio
    {
        return new static(
            audioFileId: $array['audio_file_id'],
            duration   : $array['duration'],
        );
    }

    public function getAudioFileId(): int
    {
        return $this->audioFileId;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setAudioFileId(int $value): static
    {
        $this->audioFileId = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'audio_file_id' => $this->audioFileId,
            'duration'      => $this->duration,
        ];
    }
}
