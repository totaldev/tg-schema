<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A media timestamp.
 */
class TextEntityTypeMediaTimestamp extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeMediaTimestamp';

    public function __construct(
        /**
         * Timestamp from which a video/audio/video note/voice note/story playing must start, in seconds. The media can be in the content or the link preview of the current message, or in the same places in the replied message.
         */
        protected int $mediaTimestamp
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeMediaTimestamp
    {
        return new static(
            $array['media_timestamp'],
        );
    }

    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'media_timestamp' => $this->mediaTimestamp,
        ];
    }
}
