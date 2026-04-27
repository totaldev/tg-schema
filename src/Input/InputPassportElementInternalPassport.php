<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's internal passport.
 */
class InputPassportElementInternalPassport extends InputPassportElement
{
    public const string TYPE_NAME = 'inputPassportElementInternalPassport';

    public function __construct(
        /**
         * The internal passport to be saved.
         */
        protected InputIdentityDocument $internalPassport
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementInternalPassport
    {
        return new static(
            internalPassport: TdSchemaRegistry::fromArray($array['internal_passport']),
        );
    }

    public function getInternalPassport(): InputIdentityDocument
    {
        return $this->internalPassport;
    }

    public function setInternalPassport(InputIdentityDocument $value): static
    {
        $this->internalPassport = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'internal_passport' => $this->internalPassport->jsonSerialize(),
        ];
    }
}
