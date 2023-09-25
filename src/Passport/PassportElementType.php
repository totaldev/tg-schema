<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains the type of a Telegram Passport element
 */
class PassportElementType extends TdObject
{
    public const TYPE_NAME = 'PassportElementType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): PassportElementType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
