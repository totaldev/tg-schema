<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatAction;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message sender activity in the chat has changed.
 */
class UpdateChatAction extends Update
{
    public const string TYPE_NAME = 'updateChatAction';

    public function __construct(
        /**
         * The action.
         */
        protected ChatAction    $action,
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Identifier of a message sender performing the action.
         */
        protected MessageSender $senderId,
        /**
         * Identifier of the specific topic in which the action was performed; may be null if none.
         */
        protected ?MessageTopic $topicId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatAction
    {
        return new static(
            action  : TdSchemaRegistry::fromArray($array['action']),
            chatId  : $array['chat_id'],
            senderId: TdSchemaRegistry::fromArray($array['sender_id']),
            topicId : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
        );
    }

    public function getAction(): ChatAction
    {
        return $this->action;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function setAction(ChatAction $value): static
    {
        $this->action = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

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
            '@type'     => static::TYPE_NAME,
            'action'    => $this->action->jsonSerialize(),
            'chat_id'   => $this->chatId,
            'sender_id' => $this->senderId->jsonSerialize(),
            'topic_id'  => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
