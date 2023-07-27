<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message is from a chat list or a forum topic list
 */
class MessageSourceChatList extends MessageSource
{
    public const TYPE_NAME = 'messageSourceChatList';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceChatList
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
