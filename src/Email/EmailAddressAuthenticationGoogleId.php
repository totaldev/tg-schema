<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

/**
 * An authentication token received through Google ID.
 */
class EmailAddressAuthenticationGoogleId extends EmailAddressAuthentication
{
    public const TYPE_NAME = 'emailAddressAuthenticationGoogleId';

    public function __construct(
        /**
         * The token.
         */
        protected string $token
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmailAddressAuthenticationGoogleId
    {
        return new static(
            $array['token'],
        );
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }
}
