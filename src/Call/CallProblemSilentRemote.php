<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The other side couldn't hear the user
 */
class CallProblemSilentRemote extends CallProblem
{
    public const TYPE_NAME = 'callProblemSilentRemote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemSilentRemote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
