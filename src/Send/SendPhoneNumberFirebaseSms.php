<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends Firebase Authentication SMS to the specified phone number. Works only when received a code of the type authenticationCodeTypeFirebaseAndroid or
 * authenticationCodeTypeFirebaseIos.
 */
class SendPhoneNumberFirebaseSms extends TdFunction
{
    public const TYPE_NAME = 'sendPhoneNumberFirebaseSms';

    public function __construct(
        /**
         * Play Integrity API or SafetyNet Attestation API token for the Android application, or secret from push notification for the iOS application.
         */
        protected string $token
    ) {}

    public static function fromArray(array $array): SendPhoneNumberFirebaseSms
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
