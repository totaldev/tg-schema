<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Register;

use Totaldev\TgSchema\Device\DeviceToken;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Registers the currently used device for receiving push notifications. Returns a globally unique identifier of the push notification subscription.
 */
class RegisterDevice extends TdFunction
{
    public const string TYPE_NAME = 'registerDevice';

    public function __construct(
        /**
         * Device token.
         */
        protected DeviceToken $deviceToken,
        /**
         * List of user identifiers of other users currently using the application.
         *
         * @var int[]
         */
        protected array       $otherUserIds,
    ) {}

    public static function fromArray(array $array): RegisterDevice
    {
        return new static(
            deviceToken : TdSchemaRegistry::fromArray($array['device_token']),
            otherUserIds: $array['other_user_ids'],
        );
    }

    public function getDeviceToken(): DeviceToken
    {
        return $this->deviceToken;
    }

    public function getOtherUserIds(): array
    {
        return $this->otherUserIds;
    }

    public function setDeviceToken(DeviceToken $value): static
    {
        $this->deviceToken = $value;

        return $this;
    }

    public function setOtherUserIds(array $value): static
    {
        $this->otherUserIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'device_token'   => $this->deviceToken->jsonSerialize(),
            'other_user_ids' => $this->otherUserIds,
        ];
    }
}
