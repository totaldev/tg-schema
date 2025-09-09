<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A Telegram Passport element to be saved containing the user's phone number.
 */
class InputPassportElementPhoneNumber extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPhoneNumber';

    public function __construct(
        /**
         * The phone number to be saved.
         */
        protected string $phoneNumber
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementPhoneNumber
    {
        return new static(
            $array['phone_number'],
        );
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
        ];
    }
}
