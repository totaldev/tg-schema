<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * An authentication code is a phrase from multiple words delivered via an SMS message to the specified phone number; non-official applications may not receive
 * this type of code.
 */
class AuthenticationCodeTypeSmsPhrase extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeSmsPhrase';

    public function __construct(
        /**
         * The first word of the phrase if known.
         */
        protected string $firstWord
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeSmsPhrase
    {
        return new static(
            $array['first_word'],
        );
    }

    public function getFirstWord(): string
    {
        return $this->firstWord;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'first_word' => $this->firstWord,
        ];
    }
}
