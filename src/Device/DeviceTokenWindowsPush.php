<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Windows Push Notification Services.
 */
class DeviceTokenWindowsPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenWindowsPush';

    public function __construct(
        /**
         * The access token that will be used to send notifications; may be empty to deregister a device.
         */
        protected string $accessToken
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenWindowsPush
    {
        return new static(
            $array['access_token'],
        );
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'access_token' => $this->accessToken,
        ];
    }
}
