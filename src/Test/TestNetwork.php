<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends a simple network request to the Telegram servers; for testing only. Can be called before authorization.
 */
class TestNetwork extends TdFunction
{
    public const TYPE_NAME = 'testNetwork';

    public function __construct() {}

    public static function fromArray(array $array): TestNetwork
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
