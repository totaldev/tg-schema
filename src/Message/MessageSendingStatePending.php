<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message is being sent now, but has not yet been delivered to the server.
 */
class MessageSendingStatePending extends MessageSendingState
{
    public const string TYPE_NAME = 'messageSendingStatePending';

    public function __construct(
        /**
         * Non-persistent message sending identifier, specified by the application.
         */
        protected int $sendingId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSendingStatePending
    {
        return new static(
            sendingId: $array['sending_id'],
        );
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    public function setSendingId(int $value): static
    {
        $this->sendingId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'sending_id' => $this->sendingId,
        ];
    }
}
