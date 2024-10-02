<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends a code to verify an email address to be added to a user's Telegram Passport.
 */
class SendEmailAddressVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'sendEmailAddressVerificationCode';

    public function __construct(
        /**
         * Email address.
         */
        protected string $emailAddress
    ) {}

    public static function fromArray(array $array): SendEmailAddressVerificationCode
    {
        return new static(
            $array['email_address'],
        );
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'email_address' => $this->emailAddress,
        ];
    }
}
