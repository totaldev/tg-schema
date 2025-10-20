<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The limit for the number of active stories exceeded. The user can buy Telegram Premium, delete an active story, or wait for the oldest story to expire.
 */
class CanPostStoryResultActiveStoryLimitExceeded extends CanPostStoryResult
{
    public const TYPE_NAME = 'canPostStoryResultActiveStoryLimitExceeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanPostStoryResultActiveStoryLimitExceeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
