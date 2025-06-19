<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebAppOpenParameters;

/**
 * Informs TDLib that a Web App is being opened from the attachment menu, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an
 * inlineKeyboardButtonTypeWebApp button. For each bot, a confirmation alert about data sent to the bot must be shown once.
 */
class OpenWebApp extends TdFunction
{
    public const TYPE_NAME = 'openWebApp';

    public function __construct(
        /**
         * Identifier of the chat in which the Web App is opened. The Web App can't be opened in secret chats.
         */
        protected int                  $chatId,
        /**
         * Identifier of the bot, providing the Web App. If the bot is restricted for the current user, then show an error instead of calling the method.
         */
        protected int                  $botUserId,
        /**
         * The URL from an inlineKeyboardButtonTypeWebApp button, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an empty string otherwise.
         */
        protected string               $url,
        /**
         * If not 0, the message thread identifier to which the message will be sent.
         */
        protected int                  $messageThreadId,
        /**
         * If not 0, unique identifier of the topic of channel direct messages chat to which the message will be sent.
         */
        protected int                  $directMessagesChatTopicId,
        /**
         * Information about the message or story to be replied in the message sent by the Web App; pass null if none.
         */
        protected InputMessageReplyTo  $replyTo,
        /**
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters,
    ) {}

    public static function fromArray(array $array): OpenWebApp
    {
        return new static(
            $array['chat_id'],
            $array['bot_user_id'],
            $array['url'],
            $array['message_thread_id'],
            $array['direct_messages_chat_topic_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            TdSchemaRegistry::fromArray($array['parameters']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDirectMessagesChatTopicId(): int
    {
        return $this->directMessagesChatTopicId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getParameters(): WebAppOpenParameters
    {
        return $this->parameters;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'chat_id'                       => $this->chatId,
            'bot_user_id'                   => $this->botUserId,
            'url'                           => $this->url,
            'message_thread_id'             => $this->messageThreadId,
            'direct_messages_chat_topic_id' => $this->directMessagesChatTopicId,
            'reply_to'                      => $this->replyTo->typeSerialize(),
            'parameters'                    => $this->parameters->typeSerialize(),
        ];
    }
}
