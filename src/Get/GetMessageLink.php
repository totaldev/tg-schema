<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTPS link to a message in a chat. Available only if messageProperties.can_get_link, or if messageProperties.can_get_media_timestamp_links and a
 * media timestamp link is generated. This is an offline method.
 */
class GetMessageLink extends TdFunction
{
    public const string TYPE_NAME = 'getMessageLink';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Pass true to create a link for the whole media album.
         */
        protected bool $forAlbum,
        /**
         * Pass true to create a link to the message as a channel post comment, in a message thread, or a forum topic.
         */
        protected bool $inMessageThread,
        /**
         * If not 0, timestamp from which the video/audio/video note/voice note/story playing must start, in seconds. The media can be in the message content or in its link preview.
         */
        protected int  $mediaTimestamp,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): GetMessageLink
    {
        return new static(
            chatId         : $array['chat_id'],
            forAlbum       : $array['for_album'],
            inMessageThread: $array['in_message_thread'],
            mediaTimestamp : $array['media_timestamp'],
            messageId      : $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }

    public function getInMessageThread(): bool
    {
        return $this->inMessageThread;
    }

    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
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

    public function setForAlbum(bool $value): static
    {
        $this->forAlbum = $value;

        return $this;
    }

    public function setInMessageThread(bool $value): static
    {
        $this->inMessageThread = $value;

        return $this;
    }

    public function setMediaTimestamp(int $value): static
    {
        $this->mediaTimestamp = $value;

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
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'for_album'         => $this->forAlbum,
            'in_message_thread' => $this->inMessageThread,
            'media_timestamp'   => $this->mediaTimestamp,
            'message_id'        => $this->messageId,
        ];
    }
}
