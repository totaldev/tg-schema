<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the message reply markup; for bots only. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageReplyMarkup extends TdFunction
{
    public const TYPE_NAME = 'editMessageReplyMarkup';

    public function __construct(
        /**
         * The chat the message belongs to.
         */
        protected int         $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
         */
        protected int         $messageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ReplyMarkup $replyMarkup,
    ) {}

    public static function fromArray(array $array): EditMessageReplyMarkup
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
        ];
    }
}
