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
    public const TYPE_NAME = 'pageBlockVoiceNote';

    public function __construct(
        /**
         * Voice note; may be null.
         */
        protected ?VoiceNote       $voiceNote,
        /**
         * Voice note caption.
         */
        protected PageBlockCaption $caption,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockVoiceNote
    {
        return new static(
            isset($array['voice_note']) ? TdSchemaRegistry::fromArray($array['voice_note']) : null,
            TdSchemaRegistry::fromArray($array['caption']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'voice_note' => (isset($this->voiceNote) ? $this->voiceNote : null),
            'caption'    => $this->caption->typeSerialize(),
        ];
    }
}
