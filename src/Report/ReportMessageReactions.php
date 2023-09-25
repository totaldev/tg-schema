<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reports reactions set on a message to the Telegram moderators. Reactions on a message can be reported only if message.can_report_reactions
 */
class ReportMessageReactions extends TdFunction
{
    public const TYPE_NAME = 'reportMessageReactions';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Identifier of the sender, which added the reaction
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    public function __construct(int $chatId, int $messageId, MessageSender $senderId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->senderId = $senderId;
    }

    public static function fromArray(array $array): ReportMessageReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'sender_id' => $this->senderId->typeSerialize(),
        ];
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
}
