<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the exact type of problem with a call.
 */
class CallProblem extends TdObject
{
    public const TYPE_NAME = 'CallProblem';

    public function __construct() {}

    public static function fromArray(array $array): CallProblem
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
