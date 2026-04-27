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
    public const string TYPE_NAME = 'pushMessageContentVideo';

    public function __construct(
        /**
         * Video caption.
         */
        protected string $caption,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * True, if the video is secret.
         */
        protected bool   $isSecret,
        /**
         * Message content; may be null.
         */
        protected ?Video $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentVideo
    {
        return new static(
            caption : $array['caption'],
            isPinned: $array['is_pinned'],
            isSecret: $array['is_secret'],
            video   : (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
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

    public function setCaption(string $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setIsSecret(bool $value): static
    {
        $this->isSecret = $value;

        return $this;
    }

    public function setVideo(?Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'caption'   => $this->caption,
            'is_pinned' => $this->isPinned,
            'is_secret' => $this->isSecret,
            'video'     => (null !== $this->video ? $this->video->jsonSerialize() : null),
        ];
    }
}
