<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Personal\PersonalDetails;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's personal details.
 */
class InputPassportElementPersonalDetails extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPersonalDetails';

    public function __construct(
        /**
         * Personal details of the user.
         */
        protected PersonalDetails $personalDetails
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementPersonalDetails
    {
        return new static(
            TdSchemaRegistry::fromArray($array['personal_details']),
        );
    }

    public function getPersonalDetails(): PersonalDetails
    {
        return $this->personalDetails;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'personal_details' => $this->personalDetails->typeSerialize(),
        ];
    }
}
