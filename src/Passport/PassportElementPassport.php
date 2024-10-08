<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Identity\IdentityDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's passport.
 */
class PassportElementPassport extends PassportElement
{
    public const TYPE_NAME = 'passportElementPassport';

    public function __construct(
        /**
         * Passport.
         */
        protected IdentityDocument $passport
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementPassport
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport']),
        );
    }

    public function getPassport(): IdentityDocument
    {
        return $this->passport;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'passport' => $this->passport->typeSerialize(),
        ];
    }
}
