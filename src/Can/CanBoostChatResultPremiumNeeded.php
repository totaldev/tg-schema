<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user must subscribe to Telegram Premium to be able to boost chats
 */
class CanBoostChatResultPremiumNeeded extends CanBoostChatResult
{
    public const TYPE_NAME = 'canBoostChatResultPremiumNeeded';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanBoostChatResultPremiumNeeded
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
