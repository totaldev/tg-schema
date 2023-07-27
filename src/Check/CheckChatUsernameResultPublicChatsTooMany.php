<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Check;

/**
 * The user has too many chats with username, one of them must be made private first
 */
class CheckChatUsernameResultPublicChatsTooMany extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultPublicChatsTooMany';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultPublicChatsTooMany
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
