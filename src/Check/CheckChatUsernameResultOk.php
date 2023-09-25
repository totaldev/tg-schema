<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The username can be set
 */
class CheckChatUsernameResultOk extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
