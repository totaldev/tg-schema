<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Ubuntu Push Client service.
 */
class DeviceTokenUbuntuPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenUbuntuPush';

    public function __construct(
        /**
         * Token; may be empty to deregister a device.
         */
        protected string $token
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenUbuntuPush
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
