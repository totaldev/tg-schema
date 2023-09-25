<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Resends phone number confirmation code
 */
class ResendPhoneNumberConfirmationCode extends TdFunction
{
    public const TYPE_NAME = 'resendPhoneNumberConfirmationCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendPhoneNumberConfirmationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
