<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Phone;

/**
 * Checks ownership of a new phone number to change the user's authentication phone number; for official Android and iOS applications only.
 */
class PhoneNumberCodeTypeChange extends PhoneNumberCodeType
{
    public const TYPE_NAME = 'phoneNumberCodeTypeChange';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PhoneNumberCodeTypeChange
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
