<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Cancel;

use Totaldev\TgSchema\TdFunction;

/**
 * Cancels reset of 2-step verification password. The method can be called if passwordState.pending_reset_date > 0.
 */
class CancelPasswordReset extends TdFunction
{
    public const TYPE_NAME = 'cancelPasswordReset';

    public function __construct() {}

    public static function fromArray(array $array): CancelPasswordReset
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
