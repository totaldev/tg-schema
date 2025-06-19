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
    public const TYPE_NAME = 'clickChatSponsoredMessage';

    public function __construct(
        /**
         * Chat identifier of the sponsored message.
         */
        protected int  $chatId,
        /**
         * Identifier of the sponsored message.
         */
        protected int  $messageId,
        /**
         * Pass true if the media was clicked in the sponsored message.
         */
        protected bool $isMediaClick,
        /**
         * Pass true if the user expanded the video from the sponsored message fullscreen before the click.
         */
        protected bool $fromFullscreen
    ) {}

    public static function fromArray(array $array): ClickChatSponsoredMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_media_click'],
            $array['from_fullscreen'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'message_id'      => $this->messageId,
            'is_media_click'  => $this->isMediaClick,
            'from_fullscreen' => $this->fromFullscreen,
        ];
    }
}
