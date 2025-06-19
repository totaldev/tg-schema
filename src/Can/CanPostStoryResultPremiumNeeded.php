<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The user must subscribe to Telegram Premium to be able to post stories.
 */
class CanPostStoryResultPremiumNeeded extends CanPostStoryResult
{
    public const TYPE_NAME = 'canPostStoryResultPremiumNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanPostStoryResultPremiumNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
