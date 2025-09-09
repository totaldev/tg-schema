<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Identity\IdentityDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's internal passport.
 */
class PassportElementInternalPassport extends PassportElement
{
    public const TYPE_NAME = 'passportElementInternalPassport';

    public function __construct(
        /**
         * Internal passport.
         */
        protected IdentityDocument $internalPassport
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementInternalPassport
    {
        return new static(
            TdSchemaRegistry::fromArray($array['internal_passport']),
        );
    }

    public function getInternalPassport(): IdentityDocument
    {
        return $this->internalPassport;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'internal_passport' => $this->internalPassport->typeSerialize(),
        ];
    }
}
