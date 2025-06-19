<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The default chat reply markup was changed. Can occur because new messages with reply markup were received or because an old reply markup was hidden by the
 * user.
 */
class UpdateChatReplyMarkup extends Update
{
    public const TYPE_NAME = 'updateChatReplyMarkup';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
         */
        protected int $replyMarkupMessageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatReplyMarkup
    {
        return new static(
            $array['chat_id'],
            $array['reply_markup_message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'reply_markup_message_id' => $this->replyMarkupMessageId,
        ];
    }
}
