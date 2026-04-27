<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Voice\VoiceNote;

/**
 * A voice note message.
 */
class MessageVoiceNote extends MessageContent
{
    public const string TYPE_NAME = 'messageVoiceNote';

    public function __construct(
        /**
         * Voice note caption.
         */
        protected FormattedText $caption,
        /**
         * True, if at least one of the recipients has listened to the voice note.
         */
        protected bool          $isListened,
        /**
         * The voice note description.
         */
        protected VoiceNote     $voiceNote,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVoiceNote
    {
        return new static(
            caption   : TdSchemaRegistry::fromArray($array['caption']),
            isListened: $array['is_listened'],
            voiceNote : TdSchemaRegistry::fromArray($array['voice_note']),
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getIsListened(): bool
    {
        return $this->isListened;
    }

    public function getVoiceNote(): VoiceNote
    {
        return $this->voiceNote;
    }

    public function setCaption(FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setIsListened(bool $value): static
    {
        $this->isListened = $value;

        return $this;
    }

    public function setVoiceNote(VoiceNote $value): static
    {
        $this->voiceNote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'caption'     => $this->caption->jsonSerialize(),
            'is_listened' => $this->isListened,
            'voice_note'  => $this->voiceNote->jsonSerialize(),
        ];
    }
}
