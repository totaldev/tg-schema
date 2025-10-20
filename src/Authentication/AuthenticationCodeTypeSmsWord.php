<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * An authentication code is a word delivered via an SMS message to the specified phone number; non-official applications may not receive this type of code.
 */
class AuthenticationCodeTypeSmsWord extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeSmsWord';

    public function __construct(
        /**
         * The first letters of the word if known.
         */
        protected string $firstLetter
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeSmsWord
    {
        return new static(
            $array['first_letter'],
        );
    }

    public function getFirstLetter(): string
    {
        return $this->firstLetter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'first_letter' => $this->firstLetter,
        ];
    }
}
