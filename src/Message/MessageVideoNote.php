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
    public const TYPE_NAME = 'messageVideoNote';

    public function __construct(
        /**
         * The video note description.
         */
        protected VideoNote $videoNote,
        /**
         * True, if at least one of the recipients has viewed the video note.
         */
        protected bool      $isViewed,
        /**
         * True, if the video note thumbnail must be blurred and the video note must be shown only while tapped.
         */
        protected bool      $isSecret,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVideoNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video_note']),
            $array['is_viewed'],
            $array['is_secret'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'video_note' => $this->videoNote->typeSerialize(),
            'is_viewed'  => $this->isViewed,
            'is_secret'  => $this->isSecret,
        ];
    }
}
