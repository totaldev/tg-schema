<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the description of an error in a Telegram Passport element; for bots only.
 */
class InputPassportElementErrorSource extends TdObject
{
    public const TYPE_NAME = 'InputPassportElementErrorSource';

    public function __construct() {}

    public static function fromArray(array $array): InputPassportElementErrorSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
