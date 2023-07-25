<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Informs TDLib that a Web App is being opened from attachment menu, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an inlineKeyboardButtonTypeWebApp button. For each bot, a confirmation alert about data sent to the bot must be shown once
 */
class OpenWebApp extends TdFunction
{
    public const TYPE_NAME = 'openWebApp';

    /**
     * Identifier of the chat in which the Web App is opened. The Web App can't be opened in secret chats
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the bot, providing the Web App
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * The URL from an inlineKeyboardButtonTypeWebApp button, a botMenuButton button, or an internalLinkTypeAttachmentMenuBot link, or an empty string otherwise
     *
     * @var string
     */
    protected string $url;

    /**
     * Preferred Web App theme; pass null to use the default theme
     *
     * @var ThemeParameters
     */
    protected ThemeParameters $theme;

    /**
     * Short name of the application; 0-64 English letters, digits, and underscores
     *
     * @var string
     */
    protected string $applicationName;

    /**
     * If not 0, a message thread identifier in which the message will be sent
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Identifier of the replied message or story for the message sent by the Web App; pass null if none
     *
     * @var MessageReplyTo
     */
    protected MessageReplyTo $replyTo;

    public function __construct(
        int $chatId,
        int $botUserId,
        string $url,
        ThemeParameters $theme,
        string $applicationName,
        int $messageThreadId,
        MessageReplyTo $replyTo
    ) {
        $this->chatId = $chatId;
        $this->botUserId = $botUserId;
        $this->url = $url;
        $this->theme = $theme;
        $this->applicationName = $applicationName;
        $this->messageThreadId = $messageThreadId;
        $this->replyTo = $replyTo;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'bot_user_id' => $this->botUserId,
            'url' => $this->url,
            'theme' => $this->theme->typeSerialize(),
            'application_name' => $this->applicationName,
            'message_thread_id' => $this->messageThreadId,
            'reply_to' => $this->replyTo->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getReplyTo(): MessageReplyTo
    {
        return $this->replyTo;
    }
}
