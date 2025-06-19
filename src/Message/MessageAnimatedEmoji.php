<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Animated\AnimatedEmoji;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with an animated emoji.
 */
class MessageAnimatedEmoji extends MessageContent
{
    public const TYPE_NAME = 'messageAnimatedEmoji';

    public function __construct(
        /**
         * The animated emoji.
         */
        protected AnimatedEmoji $animatedEmoji,
        /**
         * The corresponding emoji.
         */
        protected string        $emoji
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageAnimatedEmoji
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animated_emoji']),
            $array['emoji'],
        );
    }

    public function getAnimatedEmoji(): AnimatedEmoji
    {
        return $this->animatedEmoji;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'animated_emoji' => $this->animatedEmoji->typeSerialize(),
            'emoji'          => $this->emoji,
        ];
    }
}
