<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A Telegram Passport element to be saved containing the user's email address.
 */
class InputPassportElementEmailAddress extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementEmailAddress';

    public function __construct(
        /**
         * The email address to be saved.
         */
        protected string $emailAddress
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementEmailAddress
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
