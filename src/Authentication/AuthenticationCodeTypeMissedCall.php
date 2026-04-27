<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The last digits of the phone number that calls are the
 * code that must be entered manually by the user.
 */
class AuthenticationCodeTypeMissedCall extends AuthenticationCodeType
{
    public const string TYPE_NAME = 'authenticationCodeTypeMissedCall';

    public function __construct(
        /**
         * Number of digits in the code, excluding the prefix.
         */
        protected int    $length,
        /**
         * Prefix of the phone number from which the call will be made.
         */
        protected string $phoneNumberPrefix,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeMissedCall
    {
        return new static(
            length           : $array['length'],
            phoneNumberPrefix: $array['phone_number_prefix'],
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function setPhoneNumberPrefix(string $value): static
    {
        $this->phoneNumberPrefix = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'length'              => $this->length,
            'phone_number_prefix' => $this->phoneNumberPrefix,
        ];
    }
}
