<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for HUAWEI Push Service.
 */
class DeviceTokenHuaweiPush extends DeviceToken
{
    public const string TYPE_NAME = 'deviceTokenHuaweiPush';

    public function __construct(
        /**
         * Device registration token; may be empty to deregister a device.
         */
        protected string $token,
        /**
         * True, if push notifications must be additionally encrypted.
         */
        protected bool   $encrypt,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenHuaweiPush
    {
        return new static(
            $array['token'],
            $array['encrypt'],
        );
    }

    public function getEncrypt(): bool
    {
        return $this->encrypt;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setEncrypt(bool $value): static
    {
        $this->encrypt = $value;

        return $this;
    }

    public function setToken(string $value): static
    {
        $this->token = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'token'   => $this->token,
            'encrypt' => $this->encrypt,
        ];
    }
}
