<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A token for Microsoft Push Notification Service
 */
class DeviceTokenMicrosoftPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenMicrosoftPush';

    /**
     * Push notification channel URI; may be empty to deregister a device
     *
     * @var string
     */
    protected string $channelUri;

    public function __construct(string $channelUri)
    {
        parent::__construct();

        $this->channelUri = $channelUri;
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
            '@type' => static::TYPE_NAME,
            'channel_uri' => $this->channelUri,
        ];
    }
}
