<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's rental agreement.
 */
class PassportElementRentalAgreement extends PassportElement
{
    public const TYPE_NAME = 'passportElementRentalAgreement';

    public function __construct(
        /**
         * Rental agreement.
         */
        protected PersonalDocument $rentalAgreement
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementRentalAgreement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['rental_agreement']),
        );
    }

    public function getRentalAgreement(): PersonalDocument
    {
        return $this->rentalAgreement;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'rental_agreement' => $this->rentalAgreement->typeSerialize(),
        ];
    }
}
