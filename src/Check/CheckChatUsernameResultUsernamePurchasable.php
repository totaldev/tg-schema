<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The username can be purchased at fragment.com
 */
class CheckChatUsernameResultUsernamePurchasable extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultUsernamePurchasable';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultUsernamePurchasable
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
