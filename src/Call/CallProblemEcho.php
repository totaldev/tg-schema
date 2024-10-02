<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The user heard their own voice.
 */
class CallProblemEcho extends CallProblem
{
    public const TYPE_NAME = 'callProblemEcho';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemEcho
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
