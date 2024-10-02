<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's passport.
 */
class InputPassportElementPassport extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPassport';

    public function __construct(
        /**
         * The passport to be saved.
         */
        protected InputIdentityDocument $passport
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementPassport
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport']),
        );
    }

    public function getPassport(): InputIdentityDocument
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
