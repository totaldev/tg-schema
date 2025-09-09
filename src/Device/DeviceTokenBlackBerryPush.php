<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for BlackBerry Push Service.
 */
class DeviceTokenBlackBerryPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenBlackBerryPush';

    public function __construct(
        /**
         * Token; may be empty to deregister a device.
         */
        protected string $token
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenBlackBerryPush
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
