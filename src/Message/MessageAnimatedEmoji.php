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
    public const string TYPE_NAME = 'messageAnimatedEmoji';

    public function __construct(
        /**
         * The animated emoji.
         */
        protected AnimatedEmoji $animatedEmoji,
        /**
         * The corresponding emoji.
         */
        protected string        $emoji,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageAnimatedEmoji
    {
        return new static(
            animatedEmoji: TdSchemaRegistry::fromArray($array['animated_emoji']),
            emoji        : $array['emoji'],
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

    public function setAnimatedEmoji(AnimatedEmoji $value): static
    {
        $this->animatedEmoji = $value;

        return $this;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'animated_emoji' => $this->animatedEmoji->jsonSerialize(),
            'emoji'          => $this->emoji,
        ];
    }
}
