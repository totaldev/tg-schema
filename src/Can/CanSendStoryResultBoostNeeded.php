<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The channel chat must be boosted first by Telegram Premium subscribers to post more stories. Call getChatBoostStatus to get current boost status of the chat
 */
class CanSendStoryResultBoostNeeded extends CanSendStoryResult
{
    public const TYPE_NAME = 'canSendStoryResultBoostNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendStoryResultBoostNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
