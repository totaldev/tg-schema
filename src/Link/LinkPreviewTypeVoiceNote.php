<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Voice\VoiceNote;

/**
 * The link is a link to a voice note message.
 */
class LinkPreviewTypeVoiceNote extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeVoiceNote';

    public function __construct(
        /**
         * The voice note.
         */
        protected VoiceNote $voiceNote
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeVoiceNote
    {
        return new static(
            voiceNote: TdSchemaRegistry::fromArray($array['voice_note']),
        );
    }

    public function getVoiceNote(): VoiceNote
    {
        return $this->voiceNote;
    }

    public function setVoiceNote(VoiceNote $value): static
    {
        $this->voiceNote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'voice_note' => $this->voiceNote->jsonSerialize(),
        ];
    }
}
