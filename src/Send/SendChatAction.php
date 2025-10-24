<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Chat\ChatAction;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a notification about user activity in a chat.
 */
class SendChatAction extends TdFunction
{
    public const string TYPE_NAME = 'sendChatAction';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * Identifier of the topic in which the action is performed.
         */
        protected MessageTopic $topicId,
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string       $businessConnectionId,
        /**
         * The action description; pass null to cancel the currently active action.
         */
        protected ?ChatAction  $action = null,
    ) {}

    public static function fromArray(array $array): SendChatAction
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['topic_id']),
            $array['business_connection_id'],
            isset($array['action']) ? TdSchemaRegistry::fromArray($array['action']) : null,
        );
    }

    public function getAction(): ?ChatAction
    {
        return $this->action;
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTopicId(): MessageTopic
    {
        return $this->topicId;
    }

    public function setAction(?ChatAction $value): static
    {
        $this->action = $value;

        return $this;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setTopicId(MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'topic_id'               => $this->topicId->typeSerialize(),
            'business_connection_id' => $this->businessConnectionId,
            'action'                 => $this->action ?? null,
        ];
    }
}
