<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

/**
 * A Telegram Passport element containing the user's internal passport.
 */
class PassportElementTypeInternalPassport extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeInternalPassport';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeInternalPassport
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
