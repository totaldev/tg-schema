<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

/**
 * A Telegram Passport element containing the user's passport.
 */
class PassportElementTypePassport extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypePassport';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypePassport
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
