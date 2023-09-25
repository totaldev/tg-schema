<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's phone number
 */
class PassportElementPhoneNumber extends PassportElement
{
    public const TYPE_NAME = 'passportElementPhoneNumber';

    /**
     * Phone number
     *
     * @var string
     */
    protected string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        parent::__construct();

        $this->phoneNumber = $phoneNumber;
    }

    public static function fromArray(array $array): PassportElementPhoneNumber
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
            '@type' => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
        ];
    }
}
