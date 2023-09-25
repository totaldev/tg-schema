<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A token for HUAWEI Push Service
 */
class DeviceTokenHuaweiPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenHuaweiPush';

    /**
     * True, if push notifications must be additionally encrypted
     *
     * @var bool
     */
    protected bool $encrypt;

    /**
     * Device registration token; may be empty to deregister a device
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token, bool $encrypt)
    {
        parent::__construct();

        $this->token = $token;
        $this->encrypt = $encrypt;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
            'encrypt' => $this->encrypt,
        ];
    }
}
