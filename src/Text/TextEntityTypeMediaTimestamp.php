<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A media timestamp
 */
class TextEntityTypeMediaTimestamp extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeMediaTimestamp';

    /**
     * Timestamp from which a video/audio/video note/voice note playing must start, in seconds. The media can be in the content or the web page preview of the
     * current message, or in the same places in the replied message
     *
     * @var int
     */
    protected int $mediaTimestamp;

    public function __construct(int $mediaTimestamp)
    {
        parent::__construct();

        $this->mediaTimestamp = $mediaTimestamp;
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
            '@type' => static::TYPE_NAME,
            'media_timestamp' => $this->mediaTimestamp,
        ];
    }
}
