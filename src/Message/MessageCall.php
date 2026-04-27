<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Call\CallDiscardReason;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with information about an ended call.
 */
class MessageCall extends MessageContent
{
    public const string TYPE_NAME = 'messageCall';

    public function __construct(
        /**
         * Reason why the call was discarded.
         */
        protected CallDiscardReason $discardReason,
        /**
         * Call duration, in seconds.
         */
        protected int               $duration,
        /**
         * True, if the call was a video call.
         */
        protected bool              $isVideo,
        /**
         * Persistent unique call identifier; 0 for calls from other devices, which can't be passed as inputCallFromMessage.
         */
        protected int               $uniqueId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageCall
    {
        return new static(
            discardReason: TdSchemaRegistry::fromArray($array['discard_reason']),
            duration     : $array['duration'],
            isVideo      : $array['is_video'],
            uniqueId     : $array['unique_id'],
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

    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    public function setDiscardReason(CallDiscardReason $value): static
    {
        $this->discardReason = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setIsVideo(bool $value): static
    {
        $this->isVideo = $value;

        return $this;
    }

    public function setUniqueId(int $value): static
    {
        $this->uniqueId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'discard_reason' => $this->discardReason->jsonSerialize(),
            'duration'       => $this->duration,
            'is_video'       => $this->isVideo,
            'unique_id'      => $this->uniqueId,
        ];
    }
}
