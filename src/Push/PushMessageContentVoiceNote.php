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
    public const TYPE_NAME = 'pushMessageContentVoiceNote';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?VoiceNote $voiceNote,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool       $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVoiceNote
    {
        return new static(
            isset($array['voice_note']) ? TdSchemaRegistry::fromArray($array['voice_note']) : null,
            $array['is_pinned'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'voice_note' => $this->voiceNote ?? null,
            'is_pinned'  => $this->isPinned,
        ];
    }
}
