<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A contact has registered with Telegram
 */
class MessageContactRegistered extends MessageContent
{
    public const TYPE_NAME = 'messageContactRegistered';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageContactRegistered
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}