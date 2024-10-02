<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reports reactions set on a message to the Telegram moderators. Reactions on a message can be reported only if messageProperties.can_report_reactions.
 */
class ReportMessageReactions extends TdFunction
{
    public const TYPE_NAME = 'reportMessageReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Message identifier.
         */
        protected int           $messageId,
        /**
         * Identifier of the sender, which added the reaction.
         */
        protected MessageSender $senderId,
    ) {}

    public static function fromArray(array $array): ReportMessageReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
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

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'sender_id'  => $this->senderId->typeSerialize(),
        ];
    }
}
