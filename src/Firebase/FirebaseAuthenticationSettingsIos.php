<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Settings for Firebase Authentication in the official iOS application
 */
class FirebaseAuthenticationSettingsIos extends FirebaseAuthenticationSettings
{
    public const TYPE_NAME = 'firebaseAuthenticationSettingsIos';

    /**
     * Device token from Apple Push Notification service
     *
     * @var string
     */
    protected string $deviceToken;

    /**
     * True, if App Sandbox is enabled
     *
     * @var bool
     */
    protected bool $isAppSandbox;

    public function __construct(string $deviceToken, bool $isAppSandbox)
    {
        parent::__construct();

        $this->deviceToken = $deviceToken;
        $this->isAppSandbox = $isAppSandbox;
    }

    public static function fromArray(array $array): FirebaseAuthenticationSettingsIos
    {
        return new static(
            $array['device_token'],
            $array['is_app_sandbox'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'device_token' => $this->deviceToken,
            'is_app_sandbox' => $this->isAppSandbox,
        ];
    }

    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    public function getIsAppSandbox(): bool
    {
        return $this->isAppSandbox;
    }
}
