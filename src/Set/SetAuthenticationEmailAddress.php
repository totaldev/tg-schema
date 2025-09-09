<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the email address of the user and sends an authentication code to the email address. Works only when the current authorization state is
 * authorizationStateWaitEmailAddress.
 */
class SetAuthenticationEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'setAuthenticationEmailAddress';

    public function __construct(
        /**
         * The email address of the user.
         */
        protected string $emailAddress
    ) {}

    public static function fromArray(array $array): SetAuthenticationEmailAddress
    {
        return new static(
            $array['email_address'],
        );
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'email_address' => $this->emailAddress,
        ];
    }
}
