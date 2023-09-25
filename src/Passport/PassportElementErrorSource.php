<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the description of an error in a Telegram Passport element
 */
class PassportElementErrorSource extends TdObject
{
    public const TYPE_NAME = 'PassportElementErrorSource';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PassportElementErrorSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
