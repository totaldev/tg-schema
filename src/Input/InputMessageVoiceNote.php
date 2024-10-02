<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSelfDestructType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A voice note message.
 */
class InputMessageVoiceNote extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVoiceNote';

    public function __construct(
        /**
         * Voice note to be sent. The voice note must be encoded with the Opus codec and stored inside an OGG container with a single audio channel, or be in MP3 or M4A format as regular audio.
         */
        protected InputFile                $voiceNote,
        /**
         * Duration of the voice note, in seconds.
         */
        protected int                      $duration,
        /**
         * Waveform representation of the voice note in 5-bit format.
         */
        protected string                   $waveform,
        /**
         * Voice note caption; may be null if empty; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText           $caption,
        /**
         * Voice note self-destruct type; may be null if none; pass null if none; private chats only.
         */
        protected ?MessageSelfDestructType $selfDestructType,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageVoiceNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['voice_note']),
            $array['duration'],
            $array['waveform'],
            isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null,
            isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null,
        );
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getSelfDestructType(): ?MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getVoiceNote(): InputFile
    {
        return $this->voiceNote;
    }

    public function getWaveform(): string
    {
        return $this->waveform;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'voice_note'         => $this->voiceNote->typeSerialize(),
            'duration'           => $this->duration,
            'waveform'           => $this->waveform,
            'caption'            => (isset($this->caption) ? $this->caption : null),
            'self_destruct_type' => (isset($this->selfDestructType) ? $this->selfDestructType : null),
        ];
    }
}
