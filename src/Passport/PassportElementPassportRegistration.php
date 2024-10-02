<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's passport registration pages.
 */
class PassportElementPassportRegistration extends PassportElement
{
    public const TYPE_NAME = 'passportElementPassportRegistration';

    public function __construct(
        /**
         * Passport registration pages.
         */
        protected PersonalDocument $passportRegistration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementPassportRegistration
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport_registration']),
        );
    }

    public function getPassportRegistration(): PersonalDocument
    {
        return $this->passportRegistration;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'passport_registration' => $this->passportRegistration->typeSerialize(),
        ];
    }
}
