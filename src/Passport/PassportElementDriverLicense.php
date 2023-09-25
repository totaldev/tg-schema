<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Identity\IdentityDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's driver license
 */
class PassportElementDriverLicense extends PassportElement
{
    public const TYPE_NAME = 'passportElementDriverLicense';

    /**
     * Driver license
     *
     * @var IdentityDocument
     */
    protected IdentityDocument $driverLicense;

    public function __construct(IdentityDocument $driverLicense)
    {
        parent::__construct();

        $this->driverLicense = $driverLicense;
    }

    public static function fromArray(array $array): PassportElementDriverLicense
    {
        return new static(
            TdSchemaRegistry::fromArray($array['driver_license']),
        );
    }

    public function getDriverLicense(): IdentityDocument
    {
        return $this->driverLicense;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'driver_license' => $this->driverLicense->typeSerialize(),
        ];
    }
}
