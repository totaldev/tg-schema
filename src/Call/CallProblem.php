<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the exact type of a problem with a call
 */
class CallProblem extends TdObject
{
    public const TYPE_NAME = 'CallProblem';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CallProblem
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
