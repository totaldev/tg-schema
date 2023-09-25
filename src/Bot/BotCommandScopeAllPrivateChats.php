<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A scope covering all private chats
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeAllPrivateChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeAllPrivateChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
