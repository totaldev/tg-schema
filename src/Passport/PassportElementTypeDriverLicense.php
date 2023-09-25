<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's driver license
 */
class PassportElementTypeDriverLicense extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeDriverLicense';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeDriverLicense
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
