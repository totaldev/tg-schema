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
    public const string TYPE_NAME = 'deviceTokenApplePushVoIP';

    public function __construct(
        /**
         * Device token; may be empty to deregister a device.
         */
        protected string $deviceToken,
        /**
         * True, if push notifications must be additionally encrypted.
         */
        protected bool   $encrypt,
        /**
         * True, if App Sandbox is enabled.
         */
        protected bool   $isAppSandbox,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenApplePushVoIP
    {
        return new static(
            deviceToken : $array['device_token'],
            encrypt     : $array['encrypt'],
            isAppSandbox: $array['is_app_sandbox'],
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

    public function setDeviceToken(string $value): static
    {
        $this->deviceToken = $value;

        return $this;
    }

    public function setEncrypt(bool $value): static
    {
        $this->encrypt = $value;

        return $this;
    }

    public function setIsAppSandbox(bool $value): static
    {
        $this->isAppSandbox = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'device_token'   => $this->deviceToken,
            'encrypt'        => $this->encrypt,
            'is_app_sandbox' => $this->isAppSandbox,
        ];
    }
}
