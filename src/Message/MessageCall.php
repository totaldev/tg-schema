<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Call\CallDiscardReason;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with information about an ended call
 */
class MessageCall extends MessageContent
{
    public const TYPE_NAME = 'messageCall';

    /**
     * Reason why the call was discarded
     *
     * @var CallDiscardReason
     */
    protected CallDiscardReason $discardReason;

    /**
     * Call duration, in seconds
     *
     * @var int
     */
    protected int $duration;

    /**
     * True, if the call was a video call
     *
     * @var bool
     */
    protected bool $isVideo;

    public function __construct(bool $isVideo, CallDiscardReason $discardReason, int $duration)
    {
        parent::__construct();

        $this->isVideo = $isVideo;
        $this->discardReason = $discardReason;
        $this->duration = $duration;
    }

    public static function fromArray(array $array): MessageCall
    {
        return new static(
            $array['is_video'],
            TdSchemaRegistry::fromArray($array['discard_reason']),
            $array['duration'],
        );
    }

    public function getDiscardReason(): CallDiscardReason
    {
        return $this->discardReason;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_video' => $this->isVideo,
            'discard_reason' => $this->discardReason->typeSerialize(),
            'duration' => $this->duration,
        ];
    }
}
