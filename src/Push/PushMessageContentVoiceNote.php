<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Voice\VoiceNote;

/**
 * A voice note message.
 */
class PushMessageContentVoiceNote extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentVoiceNote';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool       $isPinned,
        /**
         * Message content; may be null.
         */
        protected ?VoiceNote $voiceNote,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVoiceNote
    {
        return new static(
            isPinned : $array['is_pinned'],
            voiceNote: (isset($array['voice_note']) ? TdSchemaRegistry::fromArray($array['voice_note']) : null),
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getVoiceNote(): ?VoiceNote
    {
        return $this->voiceNote;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

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
            'is_pinned'  => $this->isPinned,
            'voice_note' => (null !== $this->voiceNote ? $this->voiceNote->jsonSerialize() : null),
        ];
    }
}
