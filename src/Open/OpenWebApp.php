<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebAppOpenParameters;

/**
 * Informs TDLib that a Web App is being opened from the attachment menu, a botMenuButton button, an internalLinkTypeAttachmentMenuBot link, or an
 * inlineKeyboardButtonTypeWebApp button. For each bot, a confirmation alert about data sent to the bot must be shown once.
 */
class OpenWebApp extends TdFunction
{
    public const string TYPE_NAME = 'openWebApp';

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
         * Parameters to use to open the Web App.
         */
        protected WebAppOpenParameters $parameters,
        /**
         * Topic in which the message will be sent; pass null if none.
         */
        protected ?MessageTopic        $topicId = null,
        /**
         * Information about the message or story to be replied in the message sent by the Web App; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
    ) {}

    public static function fromArray(array $array): OpenWebApp
    {
        return new static(
            $array['chat_id'],
            $array['bot_user_id'],
            $array['url'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
            isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null,
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

    public function getParameters(): WebAppOpenParameters
    {
        return $this->parameters;
    }

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setParameters(WebAppOpenParameters $value): static
    {
        $this->parameters = $value;

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

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'bot_user_id' => $this->botUserId,
            'url'         => $this->url,
            'topic_id'    => $this->topicId ?? null,
            'reply_to'    => $this->replyTo ?? null,
            'parameters'  => $this->parameters->typeSerialize(),
        ];
    }
}
