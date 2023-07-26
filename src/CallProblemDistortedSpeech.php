<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The speech was distorted
 */
class CallProblemDistortedSpeech extends CallProblem
{
    public const TYPE_NAME = 'callProblemDistortedSpeech';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemDistortedSpeech
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
