<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the current call state.
 */
class CallState extends TdObject
{
    public const string TYPE_NAME = 'CallState';

    public function __construct() {}

    public static function fromArray(array $array): CallState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
