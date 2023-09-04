<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an HTTPS link to a message in a chat. Available only for already sent messages in supergroups and channels, or if message.can_get_media_timestamp_links and a media timestamp link is generated. This is an offline request
 */
class GetMessageLink extends TdFunction
{
    public const TYPE_NAME = 'getMessageLink';

    /**
     * Identifier of the chat to which the message belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * If not 0, timestamp from which the video/audio/video note/voice note playing must start, in seconds. The media can be in the message content or in its web page preview
     *
     * @var int
     */
    protected int $mediaTimestamp;

    /**
     * Pass true to create a link for the whole media album
     *
     * @var bool
     */
    protected bool $forAlbum;

    /**
     * Pass true to create a link to the message as a channel post comment, in a message thread, or a forum topic
     *
     * @var bool
     */
    protected bool $inMessageThread;

    public function __construct(
        int $chatId,
        int $messageId,
        int $mediaTimestamp,
        bool $forAlbum,
        bool $inMessageThread,
    ) {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->mediaTimestamp = $mediaTimestamp;
        $this->forAlbum = $forAlbum;
        $this->inMessageThread = $inMessageThread;
    }

    public static function fromArray(array $array): GetMessageLink
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['media_timestamp'],
            $array['for_album'],
            $array['in_message_thread'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'media_timestamp' => $this->mediaTimestamp,
            'for_album' => $this->forAlbum,
            'in_message_thread' => $this->inMessageThread,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }

    public function getInMessageThread(): bool
    {
        return $this->inMessageThread;
    }
}
