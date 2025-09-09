<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's rental agreement.
 */
class InputPassportElementRentalAgreement extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementRentalAgreement';

    public function __construct(
        /**
         * The rental agreement to be saved.
         */
        protected InputPersonalDocument $rentalAgreement
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementRentalAgreement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['rental_agreement']),
        );
    }

    public function getRentalAgreement(): InputPersonalDocument
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
