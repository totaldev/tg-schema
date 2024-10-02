<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

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
        protected int                 $chatId,
        /**
         * Identifier of the bot, providing the Web App.
         */
        protected int                 $botUserId,
        /**
         * The URL from an inlineKeyboardButtonTypeWebApp button, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an empty string otherwise.
         */
        protected string              $url,
        /**
         * Preferred Web App theme; pass null to use the default theme.
         */
        protected ThemeParameters     $theme,
        /**
         * Short name of the current application; 0-64 English letters, digits, and underscores.
         */
        protected string              $applicationName,
        /**
         * If not 0, the message thread identifier in which the message will be sent.
         */
        protected int                 $messageThreadId,
        /**
         * Information about the message or story to be replied in the message sent by the Web App; pass null if none.
         */
        protected InputMessageReplyTo $replyTo,
    ) {}

    public static function fromArray(array $array): OpenWebApp
    {
        return new static(
            $array['chat_id'],
            $array['bot_user_id'],
            $array['url'],
            TdSchemaRegistry::fromArray($array['theme']),
            $array['application_name'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
        );
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'bot_user_id'       => $this->botUserId,
            'url'               => $this->url,
            'theme'             => $this->theme->typeSerialize(),
            'application_name'  => $this->applicationName,
            'message_thread_id' => $this->messageThreadId,
            'reply_to'          => $this->replyTo->typeSerialize(),
        ];
    }
}
