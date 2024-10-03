<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Microsoft Push Notification Service.
 */
class DeviceTokenMicrosoftPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenMicrosoftPush';

    public function __construct(
        /**
         * Push notification channel URI; may be empty to deregister a device.
         */
        protected string $channelUri
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenMicrosoftPush
    {
        return new static(
            $array['channel_uri'],
        );
    }

    public function getChannelUri(): string
    {
        return $this->channelUri;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'channel_uri' => $this->channelUri,
        ];
    }
}
