<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The call ended unexpectedly.
 */
class CallProblemDropped extends CallProblem
{
    public const TYPE_NAME = 'callProblemDropped';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemDropped
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
