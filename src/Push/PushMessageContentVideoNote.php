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
    public const TYPE_NAME = 'pushMessageContentVideoNote';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?VideoNote $videoNote,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool       $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVideoNote
    {
        return new static(
            isset($array['video_note']) ? TdSchemaRegistry::fromArray($array['video_note']) : null,
            $array['is_pinned'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'video_note' => (isset($this->videoNote) ? $this->videoNote : null),
            'is_pinned'  => $this->isPinned,
        ];
    }
}
