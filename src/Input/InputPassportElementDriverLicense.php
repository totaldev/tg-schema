<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's driver license.
 */
class InputPassportElementDriverLicense extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementDriverLicense';

    public function __construct(
        /**
         * The driver license to be saved.
         */
        protected InputIdentityDocument $driverLicense
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementDriverLicense
    {
        return new static(
            TdSchemaRegistry::fromArray($array['driver_license']),
        );
    }

    public function getDriverLicense(): InputIdentityDocument
    {
        return $this->driverLicense;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'driver_license' => $this->driverLicense->typeSerialize(),
        ];
    }
}
