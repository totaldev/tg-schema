<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\Firebase\FirebaseDeviceVerificationParameters;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A digit-only authentication code is delivered via Firebase Authentication to the official Android application.
 */
class AuthenticationCodeTypeFirebaseAndroid extends AuthenticationCodeType
{
    public const string TYPE_NAME = 'authenticationCodeTypeFirebaseAndroid';

    public function __construct(
        /**
         * Parameters to be used for device verification.
         */
        protected FirebaseDeviceVerificationParameters $deviceVerificationParameters,
        /**
         * Length of the code.
         */
        protected int                                  $length,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFirebaseAndroid
    {
        return new static(
            deviceVerificationParameters: TdSchemaRegistry::fromArray($array['device_verification_parameters']),
            length                      : $array['length'],
        );
    }

    public function getDeviceVerificationParameters(): FirebaseDeviceVerificationParameters
    {
        return $this->deviceVerificationParameters;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setDeviceVerificationParameters(FirebaseDeviceVerificationParameters $value): static
    {
        $this->deviceVerificationParameters = $value;

        return $this;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'device_verification_parameters' => $this->deviceVerificationParameters->jsonSerialize(),
            'length'                         => $this->length,
        ];
    }
}
