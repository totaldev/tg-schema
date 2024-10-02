<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

/**
 * The username is occupied.
 */
class CheckChatUsernameResultUsernameOccupied extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultUsernameOccupied';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultUsernameOccupied
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
