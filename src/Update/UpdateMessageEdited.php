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
    public const string TYPE_NAME = 'updateMessageEdited';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * Point in time (Unix timestamp) when the message was edited.
         */
        protected int          $editDate,
        /**
         * Message identifier.
         */
        protected int          $messageId,
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
            chatId     : $array['chat_id'],
            editDate   : $array['edit_date'],
            messageId  : $array['message_id'],
            replyMarkup: (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setEditDate(int $value): static
    {
        $this->editDate = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'edit_date'    => $this->editDate,
            'message_id'   => $this->messageId,
            'reply_markup' => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
