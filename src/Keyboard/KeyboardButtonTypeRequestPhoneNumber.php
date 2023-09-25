<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that sends the user's phone number when pressed; available only in private chats
 */
class KeyboardButtonTypeRequestPhoneNumber extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeRequestPhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestPhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
