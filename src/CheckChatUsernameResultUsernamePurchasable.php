<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

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
