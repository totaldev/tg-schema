<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Address\Address;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's address
 */
class PassportElementAddress extends PassportElement
{
    public const TYPE_NAME = 'passportElementAddress';

    /**
     * Address
     *
     * @var Address
     */
    protected Address $address;

    public function __construct(Address $address)
    {
        parent::__construct();

        $this->address = $address;
    }

    public static function fromArray(array $array): PassportElementAddress
    {
        return new static(
            TdSchemaRegistry::fromArray($array['address']),
        );
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'address' => $this->address->typeSerialize(),
        ];
    }
}
