<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Message\MessageSchedulingState;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the time when a scheduled message will be sent. Scheduling state of all messages in the same album or forwarded together with the message will be also
 * changed.
 */
class EditMessageSchedulingState extends TdFunction
{
    public const TYPE_NAME = 'editMessageSchedulingState';

    public function __construct(
        /**
         * The chat the message belongs to.
         */
        protected int                    $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_edit_scheduling_state to check whether the message is suitable.
         */
        protected int                    $messageId,
        /**
         * The new message scheduling state; pass null to send the message immediately.
         */
        protected MessageSchedulingState $schedulingState,
    ) {}

    public static function fromArray(array $array): EditMessageSchedulingState
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['scheduling_state']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSchedulingState(): MessageSchedulingState
    {
        return $this->schedulingState;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'scheduling_state' => $this->schedulingState->typeSerialize(),
        ];
    }
}
