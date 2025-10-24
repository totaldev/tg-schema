<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An audio message.
 */
class PushMessageContentAudio extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentAudio';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?Audio $audio,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentAudio
    {
        return new static(
            isset($array['audio']) ? TdSchemaRegistry::fromArray($array['audio']) : null,
            $array['is_pinned'],
        );
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setAudio(?Audio $value): static
    {
        $this->audio = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'audio'     => $this->audio ?? null,
            'is_pinned' => $this->isPinned,
        ];
    }
}
