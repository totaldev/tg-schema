<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The phone number that calls is the code that must be
 * entered automatically.
 */
class AuthenticationCodeTypeFlashCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFlashCall';

    public function __construct(
        /**
         * Pattern of the phone number from which the call will be made.
         */
        protected string $pattern
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFlashCall
    {
        return new static(
            $array['pattern'],
        );
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'pattern' => $this->pattern,
        ];
    }
}
