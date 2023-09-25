<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The last digits of the phone number that calls are the
 * code that must be entered manually by the user
 */
class AuthenticationCodeTypeMissedCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeMissedCall';

    /**
     * Number of digits in the code, excluding the prefix
     *
     * @var int
     */
    protected int $length;

    /**
     * Prefix of the phone number from which the call will be made
     *
     * @var string
     */
    protected string $phoneNumberPrefix;

    public function __construct(string $phoneNumberPrefix, int $length)
    {
        parent::__construct();

        $this->phoneNumberPrefix = $phoneNumberPrefix;
        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeMissedCall
    {
        return new static(
            $array['phone_number_prefix'],
            $array['length'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number_prefix' => $this->phoneNumberPrefix,
            'length' => $this->length,
        ];
    }
}
