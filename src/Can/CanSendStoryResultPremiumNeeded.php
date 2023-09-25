<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user must subscribe to Telegram Premium to be able to post stories
 */
class CanSendStoryResultPremiumNeeded extends CanSendStoryResult
{
    public const TYPE_NAME = 'canSendStoryResultPremiumNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendStoryResultPremiumNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
