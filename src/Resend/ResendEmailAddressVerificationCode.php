<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;

/**
 * Resends the code to verify an email address to be added to a user's Telegram Passport.
 */
class ResendEmailAddressVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'resendEmailAddressVerificationCode';

    public function __construct() {}

    public static function fromArray(array $array): ResendEmailAddressVerificationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
