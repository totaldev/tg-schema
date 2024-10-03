<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's temporary registration.
 */
class PassportElementTemporaryRegistration extends PassportElement
{
    public const TYPE_NAME = 'passportElementTemporaryRegistration';

    public function __construct(
        /**
         * Temporary registration.
         */
        protected PersonalDocument $temporaryRegistration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTemporaryRegistration
    {
        return new static(
            TdSchemaRegistry::fromArray($array['temporary_registration']),
        );
    }

    public function getTemporaryRegistration(): PersonalDocument
    {
        return $this->temporaryRegistration;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'temporary_registration' => $this->temporaryRegistration->typeSerialize(),
        ];
    }
}
