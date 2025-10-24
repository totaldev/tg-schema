<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a video chat.
 */
class LinkPreviewTypeVideoChat extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeVideoChat';

    public function __construct(
        /**
         * Photo of the chat with the video chat; may be null if none.
         */
        protected ?ChatPhoto $photo,
        /**
         * True, if the video chat is expected to be a live stream in a channel or a broadcast group.
         */
        protected bool       $isLiveStream,
        /**
         * True, if the user can use the link to join the video chat without being muted by administrators.
         */
        protected bool       $joinsAsSpeaker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeVideoChat
    {
        return new static(
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['is_live_stream'],
            $array['joins_as_speaker'],
        );
    }

    public function getIsLiveStream(): bool
    {
        return $this->isLiveStream;
    }

    public function getJoinsAsSpeaker(): bool
    {
        return $this->joinsAsSpeaker;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function setIsLiveStream(bool $value): static
    {
        $this->isLiveStream = $value;

        return $this;
    }

    public function setJoinsAsSpeaker(bool $value): static
    {
        $this->joinsAsSpeaker = $value;

        return $this;
    }

    public function setPhoto(?ChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'photo'            => $this->photo ?? null,
            'is_live_stream'   => $this->isLiveStream,
            'joins_as_speaker' => $this->joinsAsSpeaker,
        ];
    }
}
