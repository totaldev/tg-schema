<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's temporary registration
 */
class PassportElementTemporaryRegistration extends PassportElement
{
    public const TYPE_NAME = 'passportElementTemporaryRegistration';

    /**
     * Temporary registration
     *
     * @var PersonalDocument
     */
    protected PersonalDocument $temporaryRegistration;

    public function __construct(PersonalDocument $temporaryRegistration)
    {
        parent::__construct();

        $this->temporaryRegistration = $temporaryRegistration;
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
            '@type' => static::TYPE_NAME,
            'temporary_registration' => $this->temporaryRegistration->typeSerialize(),
        ];
    }
}
