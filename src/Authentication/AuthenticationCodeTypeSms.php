<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * A digit-only authentication code is delivered via an SMS message to the specified phone number; non-official applications may not receive this type of code.
 */
class AuthenticationCodeTypeSms extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeSms';

    public function __construct(
        /**
         * Length of the code.
         */
        protected int $length
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeSms
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
