<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The message is from a chat event log
 */
class MessageSourceChatEventLog extends MessageSource
{
    public const TYPE_NAME = 'messageSourceChatEventLog';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceChatEventLog
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
