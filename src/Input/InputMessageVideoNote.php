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
    public const TYPE_NAME = 'inputMessageVideoNote';

    public function __construct(
        /**
         * Video note to be sent. The video is expected to be encoded to MPEG4 format with H.264 codec and have no data outside of the visible circle.
         */
        protected InputFile                $videoNote,
        /**
         * Video thumbnail; may be null if empty; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail          $thumbnail,
        /**
         * Duration of the video, in seconds; 0-60.
         */
        protected int                      $duration,
        /**
         * Video width and height; must be positive and not greater than 640.
         */
        protected int                      $length,
        /**
         * Video note self-destruct type; may be null if none; pass null if none; private chats only.
         */
        protected ?MessageSelfDestructType $selfDestructType,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageVideoNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video_note']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            $array['duration'],
            $array['length'],
            isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'video_note'         => $this->videoNote->typeSerialize(),
            'thumbnail'          => (isset($this->thumbnail) ? $this->thumbnail : null),
            'duration'           => $this->duration,
            'length'             => $this->length,
            'self_destruct_type' => (isset($this->selfDestructType) ? $this->selfDestructType : null),
        ];
    }
}
