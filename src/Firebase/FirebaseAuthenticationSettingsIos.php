<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

/**
 * Settings for Firebase Authentication in the official iOS application.
 */
class FirebaseAuthenticationSettingsIos extends FirebaseAuthenticationSettings
{
    public const TYPE_NAME = 'firebaseAuthenticationSettingsIos';

    public function __construct(
        /**
         * Device token from Apple Push Notification service.
         */
        protected string $deviceToken,
        /**
         * True, if App Sandbox is enabled.
         */
        protected bool   $isAppSandbox
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): FirebaseAuthenticationSettingsIos
    {
        return new static(
            $array['device_token'],
            $array['is_app_sandbox'],
        );
    }

    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    public function getIsAppSandbox(): bool
    {
        return $this->isAppSandbox;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'device_token'   => $this->deviceToken,
            'is_app_sandbox' => $this->isAppSandbox,
        ];
    }
}
