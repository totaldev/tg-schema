<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Phone;

use Totaldev\TgSchema\Firebase\FirebaseAuthenticationSettings;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains settings for the authentication of the user's phone number.
 */
class PhoneNumberAuthenticationSettings extends TdObject
{
    public const TYPE_NAME = 'phoneNumberAuthenticationSettings';

    public function __construct(
        /**
         * Pass true if the authentication code may be sent via a flash call to the specified phone number.
         */
        protected bool                           $allowFlashCall,
        /**
         * Pass true if the authentication code may be sent via a missed call to the specified phone number.
         */
        protected bool                           $allowMissedCall,
        /**
         * Pass true if the authenticated phone number is used on the current device.
         */
        protected bool                           $isCurrentPhoneNumber,
        /**
         * Pass true if there is a SIM card in the current device, but it is not possible to check whether phone number matches.
         */
        protected bool                           $hasUnknownPhoneNumber,
        /**
         * For official applications only. True, if the application can use Android SMS Retriever API (requires Google Play Services >= 10.2) to automatically receive the authentication code from the SMS. See https://developers.google.com/identity/sms-retriever/ for more details.
         */
        protected bool                           $allowSmsRetrieverApi,
        /**
         * For official Android and iOS applications only; pass null otherwise. Settings for Firebase Authentication.
         */
        protected FirebaseAuthenticationSettings $firebaseAuthenticationSettings,
        /**
         * List of up to 20 authentication tokens, recently received in updateOption("authentication_token") in previously logged out sessions; for setAuthenticationPhoneNumber only.
         *
         * @var string[]
         */
        protected array                          $authenticationTokens,
    ) {}

    public static function fromArray(array $array): PhoneNumberAuthenticationSettings
    {
        return new static(
            $array['allow_flash_call'],
            $array['allow_missed_call'],
            $array['is_current_phone_number'],
            $array['has_unknown_phone_number'],
            $array['allow_sms_retriever_api'],
            TdSchemaRegistry::fromArray($array['firebase_authentication_settings']),
            $array['authentication_tokens'],
        );
    }

    public function getAllowFlashCall(): bool
    {
        return $this->allowFlashCall;
    }

    public function getAllowMissedCall(): bool
    {
        return $this->allowMissedCall;
    }

    public function getAllowSmsRetrieverApi(): bool
    {
        return $this->allowSmsRetrieverApi;
    }

    public function getAuthenticationTokens(): array
    {
        return $this->authenticationTokens;
    }

    public function getFirebaseAuthenticationSettings(): FirebaseAuthenticationSettings
    {
        return $this->firebaseAuthenticationSettings;
    }

    public function getHasUnknownPhoneNumber(): bool
    {
        return $this->hasUnknownPhoneNumber;
    }

    public function getIsCurrentPhoneNumber(): bool
    {
        return $this->isCurrentPhoneNumber;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'allow_flash_call'                 => $this->allowFlashCall,
            'allow_missed_call'                => $this->allowMissedCall,
            'is_current_phone_number'          => $this->isCurrentPhoneNumber,
            'has_unknown_phone_number'         => $this->hasUnknownPhoneNumber,
            'allow_sms_retriever_api'          => $this->allowSmsRetrieverApi,
            'firebase_authentication_settings' => $this->firebaseAuthenticationSettings->typeSerialize(),
            'authentication_tokens'            => $this->authenticationTokens,
        ];
    }
}
