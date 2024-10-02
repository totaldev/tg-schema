<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Text\TextQuote;

/**
 * Describes a message replied by a given message.
 */
class MessageReplyToMessage extends MessageReplyTo
{
    public const TYPE_NAME = 'messageReplyToMessage';

    public function __construct(
        /**
         * The identifier of the chat to which the message belongs; may be 0 if the replied message is in unknown chat.
         */
        protected int             $chatId,
        /**
         * The identifier of the message; may be 0 if the replied message is in unknown chat.
         */
        protected int             $messageId,
        /**
         * Chosen quote from the replied message; may be null if none.
         */
        protected ?TextQuote      $quote,
        /**
         * Information about origin of the message if the message was from another chat or topic; may be null for messages from the same chat.
         */
        protected ?MessageOrigin  $origin,
        /**
         * Point in time (Unix timestamp) when the message was sent if the message was from another chat or topic; 0 for messages from the same chat.
         */
        protected int             $originSendDate,
        /**
         * Media content of the message if the message was from another chat or topic; may be null for messages from the same chat and messages without media. Can be only one of the following types: messageAnimation, messageAudio, messageContact, messageDice, messageDocument, messageGame, messageGiveaway, messageGiveawayWinners, messageInvoice, messageLocation, messagePaidMedia, messagePhoto, messagePoll, messageSticker, messageStory, messageText (for link preview), messageVenue, messageVideo, messageVideoNote, or messageVoiceNote.
         */
        protected ?MessageContent $content,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageReplyToMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            isset($array['quote']) ? TdSchemaRegistry::fromArray($array['quote']) : null,
            isset($array['origin']) ? TdSchemaRegistry::fromArray($array['origin']) : null,
            $array['origin_send_date'],
            isset($array['content']) ? TdSchemaRegistry::fromArray($array['content']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getContent(): ?MessageContent
    {
        return $this->content;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOrigin(): ?MessageOrigin
    {
        return $this->origin;
    }

    public function getOriginSendDate(): int
    {
        return $this->originSendDate;
    }

    public function getQuote(): ?TextQuote
    {
        return $this->quote;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'quote'            => (isset($this->quote) ? $this->quote : null),
            'origin'           => (isset($this->origin) ? $this->origin : null),
            'origin_send_date' => $this->originSendDate,
            'content'          => (isset($this->content) ? $this->content : null),
        ];
    }
}
