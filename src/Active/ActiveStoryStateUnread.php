<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Active;

/**
 * The chat has some unread active stories.
 */
class ActiveStoryStateUnread extends ActiveStoryState
{
    public const string TYPE_NAME = 'activeStoryStateUnread';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ActiveStoryStateUnread
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
