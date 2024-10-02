<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends 2-10 messages grouped together into an album. Currently, only audio, document, photo and video messages can be grouped into an album. Documents and
 * audio files can be only grouped in an album with messages of the same type. Returns sent messages.
 */
class SendMessageAlbum extends TdFunction
{
    public const TYPE_NAME = 'sendMessageAlbum';

    public function __construct(
        /**
         * Target chat.
         */
        protected int                 $chatId,
        /**
         * If not 0, the message thread identifier in which the messages will be sent.
         */
        protected int                 $messageThreadId,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected InputMessageReplyTo $replyTo,
        /**
         * Options to be used to send the messages; pass null to use default options.
         */
        protected MessageSendOptions  $options,
        /**
         * Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
         *
         * @var InputMessageContent[]
         */
        protected array               $inputMessageContents,
    ) {}

    public static function fromArray(array $array): SendMessageAlbum
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            TdSchemaRegistry::fromArray($array['options']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'reply_to'          => $this->replyTo->typeSerialize(),
            'options'           => $this->options->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->inputMessageContents),
        ];
    }
}
