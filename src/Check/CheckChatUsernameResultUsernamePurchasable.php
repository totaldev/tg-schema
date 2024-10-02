<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

/**
 * The username can be purchased at https://fragment.com. Information about the username can be received using getCollectibleItemInfo.
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
