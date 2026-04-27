<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Message\MessageSelfDestructType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video note message.
 */
class InputMessageVideoNote extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageVideoNote';

    public function __construct(
        /**
         * Duration of the video, in seconds; 0-60.
         */
        protected int                      $duration,
        /**
         * Video width and height; must be positive and not greater than 640.
         */
        protected int                      $length,
        /**
         * Video note to be sent. The video is expected to be encoded to MPEG4 format with H.264 codec and have no data outside of the visible circle.
         */
        protected InputFile                $videoNote,
        /**
         * Video note self-destruct type; may be null if none; pass null if none; private chats only.
         */
        protected ?MessageSelfDestructType $selfDestructType = null,
        /**
         * Video thumbnail; may be null if empty; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail          $thumbnail = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageVideoNote
    {
        return new static(
            duration        : $array['duration'],
            length          : $array['length'],
            selfDestructType: (isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null),
            thumbnail       : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            videoNote       : TdSchemaRegistry::fromArray($array['video_note']),
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getSelfDestructType(): ?MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getVideoNote(): InputFile
    {
        return $this->videoNote;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function setSelfDestructType(?MessageSelfDestructType $value): static
    {
        $this->selfDestructType = $value;

        return $this;
    }

    public function setThumbnail(?InputThumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setVideoNote(InputFile $value): static
    {
        $this->videoNote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'duration'           => $this->duration,
            'length'             => $this->length,
            'self_destruct_type' => (null !== $this->selfDestructType ? $this->selfDestructType->jsonSerialize() : null),
            'thumbnail'          => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'video_note'         => $this->videoNote->jsonSerialize(),
        ];
    }
}
