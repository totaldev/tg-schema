<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a message to other participants of a group call. Requires groupCall.can_send_messages right.
 */
class SendGroupCallMessage extends TdFunction
{
    public const TYPE_NAME = 'sendGroupCallMessage';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * Text of the message to send; 1-getOption("group_call_message_text_length_max") characters.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): SendGroupCallMessage
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
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
            'text'          => $this->text->typeSerialize(),
        ];
    }
}
