<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The video was distorted.
 */
class CallProblemDistortedVideo extends CallProblem
{
    public const TYPE_NAME = 'callProblemDistortedVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemDistortedVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
