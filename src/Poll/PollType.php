<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the type of poll.
 */
class PollType extends TdObject
{
    public const string TYPE_NAME = 'PollType';

    public function __construct() {}

    public static function fromArray(array $array): PollType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
