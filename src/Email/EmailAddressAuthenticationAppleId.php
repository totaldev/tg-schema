<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

/**
 * An authentication token received through Apple ID.
 */
class EmailAddressAuthenticationAppleId extends EmailAddressAuthentication
{
    public const string TYPE_NAME = 'emailAddressAuthenticationAppleId';

    public function __construct(
        /**
         * The token.
         */
        protected string $token
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmailAddressAuthenticationAppleId
    {
        return new static(
            token: $array['token'],
        );
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $value): static
    {
        $this->token = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }
}
