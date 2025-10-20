<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat is a private or secret chat with a mutual contact and the user's phone number can be shared with the other user using the method sharePhoneNumber.
 */
class ChatActionBarSharePhoneNumber extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarSharePhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarSharePhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
