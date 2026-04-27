<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Identity\IdentityDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's driver license.
 */
class PassportElementDriverLicense extends PassportElement
{
    public const string TYPE_NAME = 'passportElementDriverLicense';

    public function __construct(
        /**
         * Driver license.
         */
        protected IdentityDocument $driverLicense
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementDriverLicense
    {
        return new static(
            driverLicense: TdSchemaRegistry::fromArray($array['driver_license']),
        );
    }

    public function getDriverLicense(): IdentityDocument
    {
        return $this->driverLicense;
    }

    public function setDriverLicense(IdentityDocument $value): static
    {
        $this->driverLicense = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'driver_license' => $this->driverLicense->jsonSerialize(),
        ];
    }
}
