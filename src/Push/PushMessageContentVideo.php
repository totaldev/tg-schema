<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * A video message.
 */
class PushMessageContentVideo extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentVideo';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?Video $video,
        /**
         * Video caption.
         */
        protected string $caption,
        /**
         * True, if the video is secret.
         */
        protected bool   $isSecret,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVideo
    {
        return new static(
            isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null,
            $array['caption'],
            $array['is_secret'],
            $array['is_pinned'],
        );
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'video'     => (isset($this->video) ? $this->video : null),
            'caption'   => $this->caption,
            'is_secret' => $this->isSecret,
            'is_pinned' => $this->isPinned,
        ];
    }
}
