<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends 2-10 messages grouped together into an album. Currently, only audio, document, photo and video messages can be grouped into an album. Documents and
 * audio files can be only grouped in an album with messages of the same type. Returns sent messages.
 */
class SendMessageAlbum extends TdFunction
{
    public const string TYPE_NAME = 'sendMessageAlbum';

    public function __construct(
        /**
         * Target chat.
         */
        protected int                  $chatId,
        /**
         * Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
         *
         * @var InputMessageContent[]
         */
        protected array                $inputMessageContents,
        /**
         * Topic in which the messages will be sent; pass null if none.
         */
        protected ?MessageTopic        $topicId = null,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
        /**
         * Options to be used to send the messages; pass null to use default options.
         */
        protected ?MessageSendOptions  $options = null,
    ) {}

    public static function fromArray(array $array): SendMessageAlbum
    {
        return new static(
            $array['chat_id'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
            isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null,
            isset($array['options']) ? TdSchemaRegistry::fromArray($array['options']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
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

    public function getOptions(): ?MessageSendOptions
    {
        return $this->options;
    }

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setInputMessageContents(array $value): static
    {
        $this->inputMessageContents = $value;

        return $this;
    }

    public function setOptions(?MessageSendOptions $value): static
    {
        $this->options = $value;

        return $this;
    }

    public function setReplyTo(?InputMessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'topic_id'               => $this->topicId ?? null,
            'reply_to'               => $this->replyTo ?? null,
            'options'                => $this->options ?? null,
            'input_message_contents' => array_map(static fn($x) => $x->typeSerialize(), $this->inputMessageContents),
        ];
    }
}
