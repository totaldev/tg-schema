<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

/**
 * New call was received.
 */
class NotificationTypeNewCall extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewCall';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int $callId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationTypeNewCall
    {
        return new static(
            $array['call_id'],
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
        ];
    }
}
