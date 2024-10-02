<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * A digit-only authentication code is delivered via a phone call to the specified phone number.
 */
class AuthenticationCodeTypeCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeCall';

    public function __construct(
        /**
         * Length of the code.
         */
        protected int $length
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeCall
    {
        return new static(
            $array['length'],
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'length' => $this->length,
        ];
    }
}
