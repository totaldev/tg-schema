<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user is watching animations sent by the other party by clicking on an animated emoji.
 */
class ChatActionWatchingAnimations extends ChatAction
{
    public const string TYPE_NAME = 'chatActionWatchingAnimations';

    public function __construct(
        /**
         * The animated emoji.
         */
        protected string $emoji
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionWatchingAnimations
    {
        return new static(
            emoji: $array['emoji'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }
}
