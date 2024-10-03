<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's temporary registration.
 */
class InputPassportElementTemporaryRegistration extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementTemporaryRegistration';

    public function __construct(
        /**
         * The temporary registration document to be saved.
         */
        protected InputPersonalDocument $temporaryRegistration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementTemporaryRegistration
    {
        return new static(
            TdSchemaRegistry::fromArray($array['temporary_registration']),
        );
    }

    public function getTemporaryRegistration(): InputPersonalDocument
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
