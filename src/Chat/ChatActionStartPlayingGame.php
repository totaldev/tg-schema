<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The user has started to play a game.
 */
class ChatActionStartPlayingGame extends ChatAction
{
    public const TYPE_NAME = 'chatActionStartPlayingGame';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionStartPlayingGame
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
