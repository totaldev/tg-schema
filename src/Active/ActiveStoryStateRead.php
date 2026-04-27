<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Active;

/**
 * The chat has active stories, all of which were read.
 */
class ActiveStoryStateRead extends ActiveStoryState
{
    public const string TYPE_NAME = 'activeStoryStateRead';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ActiveStoryStateRead
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
