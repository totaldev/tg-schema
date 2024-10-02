<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Phone\PhoneNumberAuthenticationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the phone number of the user and sends an authentication code to the user. Works only when the current authorization state is
 * authorizationStateWaitPhoneNumber, or if there is no pending authentication query and the current authorization state is authorizationStateWaitEmailAddress,
 * authorizationStateWaitEmailCode, authorizationStateWaitCode, authorizationStateWaitRegistration, or authorizationStateWaitPassword.
 */
class SetAuthenticationPhoneNumber extends TdFunction
{
    public const TYPE_NAME = 'setAuthenticationPhoneNumber';

    public function __construct(
        /**
         * The phone number of the user, in international format.
         */
        protected string                            $phoneNumber,
        /**
         * Settings for the authentication of the user's phone number; pass null to use default settings.
         */
        protected PhoneNumberAuthenticationSettings $settings,
    ) {}

    public static function fromArray(array $array): SetAuthenticationPhoneNumber
    {
        return new static(
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getSettings(): PhoneNumberAuthenticationSettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'settings'     => $this->settings->typeSerialize(),
        ];
    }
}
