<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;

/**
 * Handles a push notification. Returns error with code 406 if the push notification is not supported and connection to the server is required to fetch new
 * data. Can be called before authorization.
 */
class ProcessPushNotification extends TdFunction
{
    public const TYPE_NAME = 'processPushNotification';

    public function __construct(
        /**
         * JSON-encoded push notification payload with all fields sent by the server, and "google.sent_time" and "google.notification.sound" fields added.
         */
        protected string $payload
    ) {}

    public static function fromArray(array $array): ProcessPushNotification
    {
        return new static(
            $array['payload'],
        );
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'payload' => $this->payload,
        ];
    }
}
