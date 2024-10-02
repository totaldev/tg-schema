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
    public const TYPE_NAME = 'chatActionWatchingAnimations';

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
            $array['emoji'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }
}
