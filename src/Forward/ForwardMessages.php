<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forward;

use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Forwards previously sent messages. Returns the forwarded messages in the same order as the message identifiers passed in message_ids. If a message can't be
 * forwarded, null will be returned instead of the message.
 */
class ForwardMessages extends TdFunction
{
    public const TYPE_NAME = 'forwardMessages';

    public function __construct(
        /**
         * Identifier of the chat to which to forward messages.
         */
        protected int                 $chatId,
        /**
         * Identifier of the chat from which to forward messages.
         */
        protected int                 $fromChatId,
        /**
         * Identifiers of the messages to forward. Message identifiers must be in a strictly increasing order. At most 100 messages can be forwarded simultaneously. A message can be forwarded only if messageProperties.can_be_forwarded.
         *
         * @var int[]
         */
        protected array               $messageIds,
        /**
         * Pass true to copy content of the messages without reference to the original sender. Always true if the messages are forwarded to a secret chat or are local. Use messageProperties.can_be_copied and messageProperties.can_be_copied_to_secret_chat to check whether the message is suitable.
         */
        protected bool                $sendCopy,
        /**
         * Pass true to remove media captions of message copies. Ignored if send_copy is false.
         */
        protected bool                $removeCaption,
        /**
         * Topic in which the messages will be forwarded; message threads aren't supported; pass null if none.
         */
        protected ?MessageTopic       $topicId = null,
        /**
         * Options to be used to send the messages; pass null to use default options.
         */
        protected ?MessageSendOptions $options = null,
    ) {}

    public static function fromArray(array $array): ForwardMessages
    {
        return new static(
            $array['chat_id'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
            $array['from_chat_id'],
            $array['message_ids'],
            isset($array['options']) ? TdSchemaRegistry::fromArray($array['options']) : null,
            $array['send_copy'],
            $array['remove_caption'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getOptions(): ?MessageSendOptions
    {
        return $this->options;
    }

    public function getRemoveCaption(): bool
    {
        return $this->removeCaption;
    }

    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'topic_id'       => $this->topicId ?? null,
            'from_chat_id'   => $this->fromChatId,
            'message_ids'    => $this->messageIds,
            'options'        => $this->options ?? null,
            'send_copy'      => $this->sendCopy,
            'remove_caption' => $this->removeCaption,
        ];
    }
}
