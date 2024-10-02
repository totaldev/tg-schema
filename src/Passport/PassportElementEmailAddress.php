<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

/**
 * A Telegram Passport element containing the user's email address.
 */
class PassportElementEmailAddress extends PassportElement
{
    public const TYPE_NAME = 'passportElementEmailAddress';

    public function __construct(
        /**
         * Email address.
         */
        protected string $emailAddress
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementEmailAddress
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
