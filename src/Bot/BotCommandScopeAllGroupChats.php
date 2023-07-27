<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A scope covering all group and supergroup chats
 */
class BotCommandScopeAllGroupChats extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeAllGroupChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeAllGroupChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
