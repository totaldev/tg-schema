<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Phone;

/**
 * Verifies ownership of a phone number to be added to the user's Telegram Passport.
 */
class PhoneNumberCodeTypeVerify extends PhoneNumberCodeType
{
    public const TYPE_NAME = 'phoneNumberCodeTypeVerify';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PhoneNumberCodeTypeVerify
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
