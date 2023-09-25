<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A token for Firebase Cloud Messaging
 */
class DeviceTokenFirebaseCloudMessaging extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenFirebaseCloudMessaging';

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

    public static function fromArray(array $array): DeviceTokenFirebaseCloudMessaging
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
