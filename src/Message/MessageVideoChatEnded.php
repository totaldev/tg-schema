<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A message with information about an ended video chat.
 */
class MessageVideoChatEnded extends MessageContent
{
    public const TYPE_NAME = 'messageVideoChatEnded';

    public function __construct(
        /**
         * Call duration, in seconds.
         */
        protected int $duration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVideoChatEnded
    {
        return new static(
            $array['duration'],
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'duration' => $this->duration,
        ];
    }
}
