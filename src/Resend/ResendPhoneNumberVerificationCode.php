<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Resends the code to verify a phone number to be added to a user's Telegram Passport
 */
class ResendPhoneNumberVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'resendPhoneNumberVerificationCode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResendPhoneNumberVerificationCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
