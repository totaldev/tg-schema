<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A token for HUAWEI Push Service
 */
class DeviceTokenHuaweiPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenHuaweiPush';

    /**
     * Device registration token; may be empty to deregister a device
     *
     * @var string
     */
    protected string $token;

    /**
     * True, if push notifications must be additionally encrypted
     *
     * @var bool
     */
    protected bool $encrypt;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
            'encrypt' => $this->encrypt,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getEncrypt(): bool
    {
        return $this->encrypt;
    }
}
