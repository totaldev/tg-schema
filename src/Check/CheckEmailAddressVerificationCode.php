<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the email address verification code for Telegram Passport.
 */
class CheckEmailAddressVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'checkEmailAddressVerificationCode';

    public function __construct(
        /**
         * Verification code to check.
         */
        protected string $code
    ) {}

    public static function fromArray(array $array): CheckEmailAddressVerificationCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}
