<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\VideoNote;

/**
 * A video note message.
 */
class MessageVideoNote extends MessageContent
{
    public const string TYPE_NAME = 'messageVideoNote';

    public function __construct(
        /**
         * True, if the video note thumbnail must be blurred and the video note must be shown only while tapped.
         */
        protected bool      $isSecret,
        /**
         * True, if at least one of the recipients has viewed the video note.
         */
        protected bool      $isViewed,
        /**
         * The video note description.
         */
        protected VideoNote $videoNote,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVideoNote
    {
        return new static(
            isSecret : $array['is_secret'],
            isViewed : $array['is_viewed'],
            videoNote: TdSchemaRegistry::fromArray($array['video_note']),
        );
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function getVideoNote(): VideoNote
    {
        return $this->videoNote;
    }

    public function setIsSecret(bool $value): static
    {
        $this->isSecret = $value;

        return $this;
    }

    public function setIsViewed(bool $value): static
    {
        $this->isViewed = $value;

        return $this;
    }

    public function setVideoNote(VideoNote $value): static
    {
        $this->videoNote = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_secret'  => $this->isSecret,
            'is_viewed'  => $this->isViewed,
            'video_note' => $this->videoNote->jsonSerialize(),
        ];
    }
}
