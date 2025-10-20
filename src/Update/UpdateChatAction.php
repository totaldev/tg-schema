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
    public const TYPE_NAME = 'updateChatAction';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Identifier of the specific topic in which the action was performed; may be null if none.
         */
        protected ?MessageTopic $topicId,
        /**
         * Identifier of a message sender performing the action.
         */
        protected MessageSender $senderId,
        /**
         * The action.
         */
        protected ChatAction    $action,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatAction
    {
        return new static(
            $array['chat_id'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['action']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'topic_id'  => $this->topicId ?? null,
            'sender_id' => $this->senderId->typeSerialize(),
            'action'    => $this->action->typeSerialize(),
        ];
    }
}
