<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new message was received in a group call. It must be shown for at most getOption("group_call_message_show_time_max") seconds after receiving.
 */
class UpdateGroupCallNewMessage extends Update
{
    public const TYPE_NAME = 'updateGroupCallNewMessage';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int           $groupCallId,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender $senderId,
        /**
         * Text of the message.
         */
        protected FormattedText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallNewMessage
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'sender_id'     => $this->senderId->typeSerialize(),
            'text'          => $this->text->typeSerialize(),
        ];
    }
}
