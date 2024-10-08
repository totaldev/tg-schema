<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

/**
 * A Telegram Passport element containing the user's address.
 */
class PassportElementTypeAddress extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeAddress';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeAddress
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
