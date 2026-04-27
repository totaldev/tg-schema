<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDetails;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's personal details.
 */
class PassportElementPersonalDetails extends PassportElement
{
    public const string TYPE_NAME = 'passportElementPersonalDetails';

    public function __construct(
        /**
         * Personal details of the user.
         */
        protected PersonalDetails $personalDetails
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementPersonalDetails
    {
        return new static(
            personalDetails: TdSchemaRegistry::fromArray($array['personal_details']),
        );
    }

    public function getPersonalDetails(): PersonalDetails
    {
        return $this->personalDetails;
    }

    public function setPersonalDetails(PersonalDetails $value): static
    {
        $this->personalDetails = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'personal_details' => $this->personalDetails->jsonSerialize(),
        ];
    }
}
