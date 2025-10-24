<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Address\Address;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's address.
 */
class PassportElementAddress extends PassportElement
{
    public const string TYPE_NAME = 'passportElementAddress';

    public function __construct(
        /**
         * Address.
         */
        protected Address $address
    ) {
        parent::__construct();
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

    public function setAddress(Address $value): static
    {
        $this->address = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'address' => $this->address->typeSerialize(),
        ];
    }
}
