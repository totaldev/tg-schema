<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Chat\ChatAction;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a notification about user activity in a chat.
 */
class SendChatAction extends TdFunction
{
    public const TYPE_NAME = 'sendChatAction';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int        $chatId,
        /**
         * If not 0, the message thread identifier in which the action was performed.
         */
        protected int        $messageThreadId,
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string     $businessConnectionId,
        /**
         * The action description; pass null to cancel the currently active action.
         */
        protected ChatAction $action,
    ) {}

    public static function fromArray(array $array): SendChatAction
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['business_connection_id'],
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function getAction(): ChatAction
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

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'message_thread_id'      => $this->messageThreadId,
            'business_connection_id' => $this->businessConnectionId,
            'action'                 => $this->action->typeSerialize(),
        ];
    }
}
