<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat reply markup was changed.
 */
class UpdateChatReplyMarkup extends Update
{
    public const string TYPE_NAME = 'updateChatReplyMarkup';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int      $chatId,
        /**
         * The message from which the reply markup must be used; may be null if there is no default reply markup in the chat.
         */
        protected ?Message $replyMarkupMessage,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatReplyMarkup
    {
        return new static(
            chatId            : $array['chat_id'],
            replyMarkupMessage: (isset($array['reply_markup_message']) ? TdSchemaRegistry::fromArray($array['reply_markup_message']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getReplyMarkupMessage(): ?Message
    {
        return $this->replyMarkupMessage;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setReplyMarkupMessage(?Message $value): static
    {
        $this->replyMarkupMessage = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'reply_markup_message' => (null !== $this->replyMarkupMessage ? $this->replyMarkupMessage->jsonSerialize() : null),
        ];
    }
}
