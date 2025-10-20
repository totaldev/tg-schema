<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The chat must be boosted first by Telegram Premium subscribers to post more stories. Call getChatBoostStatus to get current boost status of the chat.
 */
class CanPostStoryResultBoostNeeded extends CanPostStoryResult
{
    public const TYPE_NAME = 'canPostStoryResultBoostNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanPostStoryResultBoostNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
