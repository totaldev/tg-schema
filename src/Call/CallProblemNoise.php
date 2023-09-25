<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user heard background noise
 */
class CallProblemNoise extends CallProblem
{
    public const TYPE_NAME = 'callProblemNoise';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemNoise
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
