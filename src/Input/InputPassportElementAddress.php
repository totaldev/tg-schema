<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Address\Address;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's address.
 */
class InputPassportElementAddress extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementAddress';

    public function __construct(
        /**
         * The address to be saved.
         */
        protected Address $address
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementAddress
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
            '@type'   => static::TYPE_NAME,
            'address' => $this->address->typeSerialize(),
        ];
    }
}
