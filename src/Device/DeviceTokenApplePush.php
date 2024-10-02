<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Apple Push Notification service.
 */
class DeviceTokenApplePush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenApplePush';

    public function __construct(
        /**
         * Device token; may be empty to deregister a device.
         */
        protected string $deviceToken,
        /**
         * True, if App Sandbox is enabled.
         */
        protected bool   $isAppSandbox,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenApplePush
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
