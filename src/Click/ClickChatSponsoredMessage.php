<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Click;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user opened the sponsored chat via the button, the name, the chat photo, a mention in the sponsored message text, or the media in the
 * sponsored message.
 */
class ClickChatSponsoredMessage extends TdFunction
{
    public const string TYPE_NAME = 'clickChatSponsoredMessage';

    public function __construct(
        /**
         * Chat identifier of the sponsored message.
         */
        protected int  $chatId,
        /**
         * Pass true if the user expanded the video from the sponsored message fullscreen before the click.
         */
        protected bool $fromFullscreen,
        /**
         * Pass true if the media was clicked in the sponsored message.
         */
        protected bool $isMediaClick,
        /**
         * Identifier of the sponsored message.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): ClickChatSponsoredMessage
    {
        return new static(
            chatId        : $array['chat_id'],
            fromFullscreen: $array['from_fullscreen'],
            isMediaClick  : $array['is_media_click'],
            messageId     : $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromFullscreen(): bool
    {
        return $this->fromFullscreen;
    }

    public function getIsMediaClick(): bool
    {
        return $this->isMediaClick;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFromFullscreen(bool $value): static
    {
        $this->fromFullscreen = $value;

        return $this;
    }

    public function setIsMediaClick(bool $value): static
    {
        $this->isMediaClick = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'from_fullscreen' => $this->fromFullscreen,
            'is_media_click'  => $this->isMediaClick,
            'message_id'      => $this->messageId,
        ];
    }
}
