<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\VideoNote;

/**
 * A video note message.
 */
class PushMessageContentVideoNote extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentVideoNote';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool       $isPinned,
        /**
         * Message content; may be null.
         */
        protected ?VideoNote $videoNote,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVideoNote
    {
        return new static(
            isPinned : $array['is_pinned'],
            videoNote: (isset($array['video_note']) ? TdSchemaRegistry::fromArray($array['video_note']) : null),
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setVideoNote(?VideoNote $value): static
    {
        $this->videoNote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_pinned'  => $this->isPinned,
            'video_note' => (null !== $this->videoNote ? $this->videoNote->jsonSerialize() : null),
        ];
    }
}
