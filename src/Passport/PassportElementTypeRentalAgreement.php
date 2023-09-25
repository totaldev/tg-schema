<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's rental agreement
 */
class PassportElementTypeRentalAgreement extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeRentalAgreement';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeRentalAgreement
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
