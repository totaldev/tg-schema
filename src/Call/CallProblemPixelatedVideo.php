<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The video was pixelated.
 */
class CallProblemPixelatedVideo extends CallProblem
{
    public const TYPE_NAME = 'callProblemPixelatedVideo';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemPixelatedVideo
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
