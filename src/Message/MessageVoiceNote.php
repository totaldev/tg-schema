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
    public const TYPE_NAME = 'messageVoiceNote';

    public function __construct(
        /**
         * The voice note description.
         */
        protected VoiceNote     $voiceNote,
        /**
         * Voice note caption.
         */
        protected FormattedText $caption,
        /**
         * True, if at least one of the recipients has listened to the voice note.
         */
        protected bool          $isListened
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVoiceNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['voice_note']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['is_listened'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'voice_note'  => $this->voiceNote->typeSerialize(),
            'caption'     => $this->caption->typeSerialize(),
            'is_listened' => $this->isListened,
        ];
    }
}
