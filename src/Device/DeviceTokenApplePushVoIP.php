<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Apple Push Notification service VoIP notifications.
 */
class DeviceTokenApplePushVoIP extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenApplePushVoIP';

    public function __construct(
        /**
         * Device token; may be empty to deregister a device.
         */
        protected string $deviceToken,
        /**
         * True, if App Sandbox is enabled.
         */
        protected bool   $isAppSandbox,
        /**
         * True, if push notifications must be additionally encrypted.
         */
        protected bool   $encrypt
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenApplePushVoIP
    {
        return new static(
            $array['device_token'],
            $array['is_app_sandbox'],
            $array['encrypt'],
        );
    }

    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    public function getEncrypt(): bool
    {
        return $this->encrypt;
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
            'encrypt'        => $this->encrypt,
        ];
    }
}
