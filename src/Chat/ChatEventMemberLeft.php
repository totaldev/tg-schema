<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A member left the chat
 */
class ChatEventMemberLeft extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberLeft';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberLeft
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}