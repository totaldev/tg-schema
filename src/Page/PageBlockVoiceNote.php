<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Voice\VoiceNote;

/**
 * A voice note.
 */
class PageBlockVoiceNote extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockVoiceNote';

    public function __construct(
        /**
         * Voice note caption.
         */
        protected PageBlockCaption $caption,
        /**
         * Voice note; may be null.
         */
        protected ?VoiceNote       $voiceNote,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVoiceNote
    {
        return new static(
            caption  : TdSchemaRegistry::fromArray($array['caption']),
            voiceNote: (isset($array['voice_note']) ? TdSchemaRegistry::fromArray($array['voice_note']) : null),
        );
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getVoiceNote(): ?VoiceNote
    {
        return $this->voiceNote;
    }

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setVoiceNote(?VoiceNote $value): static
    {
        $this->voiceNote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'caption'    => $this->caption->jsonSerialize(),
            'voice_note' => (null !== $this->voiceNote ? $this->voiceNote->jsonSerialize() : null),
        ];
    }
}
