<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Terminate;

use Totaldev\TgSchema\TdFunction;

/**
 * Terminates all other sessions of the current user.
 */
class TerminateAllOtherSessions extends TdFunction
{
    public const TYPE_NAME = 'terminateAllOtherSessions';

    public function __construct() {}

    public static function fromArray(array $array): TerminateAllOtherSessions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
