<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the type of poll to send.
 */
class InputPollType extends TdObject
{
    public const string TYPE_NAME = 'InputPollType';

    public function __construct() {}

    public static function fromArray(array $array): InputPollType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
