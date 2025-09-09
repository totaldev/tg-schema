<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the login email address of the user. The email address can be changed only if the current user already has login email and
 * passwordState.login_email_address_pattern is non-empty. The change will not be applied until the new login email address is confirmed with
 * checkLoginEmailAddressCode. To use Apple ID/Google ID instead of an email address, call checkLoginEmailAddressCode directly.
 */
class SetLoginEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'setLoginEmailAddress';

    public function __construct(
        /**
         * New login email address.
         */
        protected string $newLoginEmailAddress
    ) {}

    public static function fromArray(array $array): SetLoginEmailAddress
    {
        return new static(
            $array['new_login_email_address'],
        );
    }

    public function getNewLoginEmailAddress(): string
    {
        return $this->newLoginEmailAddress;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'new_login_email_address' => $this->newLoginEmailAddress,
        ];
    }
}
