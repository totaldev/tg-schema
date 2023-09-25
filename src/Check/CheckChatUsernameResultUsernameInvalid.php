<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The username is invalid
 */
class CheckChatUsernameResultUsernameInvalid extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultUsernameInvalid';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultUsernameInvalid
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
