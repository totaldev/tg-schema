<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The message is being sent now, but has not yet been delivered to the server
 */
class MessageSendingStatePending extends MessageSendingState
{
    public const TYPE_NAME = 'messageSendingStatePending';

    /**
     * Non-persistent message sending identifier, specified by the application
     *
     * @var int
     */
    protected int $sendingId;

    public function __construct(int $sendingId)
    {
        parent::__construct();

        $this->sendingId = $sendingId;
    }

    public static function fromArray(array $array): MessageSendingStatePending
    {
        return new static(
            $array['sending_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sending_id' => $this->sendingId,
        ];
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }
}
