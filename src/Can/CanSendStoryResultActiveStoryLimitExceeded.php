<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The limit for the number of active stories exceeded. The user can buy Telegram Premium, delete an active story, or wait for the oldest story to expire
 */
class CanSendStoryResultActiveStoryLimitExceeded extends CanSendStoryResult
{
    public const TYPE_NAME = 'canSendStoryResultActiveStoryLimitExceeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendStoryResultActiveStoryLimitExceeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
