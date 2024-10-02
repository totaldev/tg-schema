<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Cancel;

use Totaldev\TgSchema\TdFunction;

/**
 * Cancels verification of the 2-step verification recovery email address.
 */
class CancelRecoveryEmailAddressVerification extends TdFunction
{
    public const TYPE_NAME = 'cancelRecoveryEmailAddressVerification';

    public function __construct() {}

    public static function fromArray(array $array): CancelRecoveryEmailAddressVerification
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
