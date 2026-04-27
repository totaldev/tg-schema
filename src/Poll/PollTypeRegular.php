<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

/**
 * A regular poll.
 */
class PollTypeRegular extends PollType
{
    public const string TYPE_NAME = 'pollTypeRegular';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PollTypeRegular
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
