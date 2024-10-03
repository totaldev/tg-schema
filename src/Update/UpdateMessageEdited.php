<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message was edited. Changes in the message content will come in a separate updateMessageContent.
 */
class UpdateMessageEdited extends Update
{
    public const TYPE_NAME = 'updateMessageEdited';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * Message identifier.
         */
        protected int          $messageId,
        /**
         * Point in time (Unix timestamp) when the message was edited.
         */
        protected int          $editDate,
        /**
         * New message reply markup; may be null.
         */
        protected ?ReplyMarkup $replyMarkup,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageEdited
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['edit_date'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getEditDate(): int
    {
        return $this->editDate;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'edit_date'    => $this->editDate,
            'reply_markup' => (isset($this->replyMarkup) ? $this->replyMarkup : null),
        ];
    }
}
