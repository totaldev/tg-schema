<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a link to a message or a forum topic in a chat
 */
class MessageLinkInfo extends TdObject
{
    public const TYPE_NAME = 'messageLinkInfo';

    /**
     * True, if the link is a public link for a message or a forum topic in a chat
     *
     * @var bool
     */
    protected bool $isPublic;

    /**
     * If found, identifier of the chat to which the link points, 0 otherwise
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If found, identifier of the message thread in which to open the message, or a forum topic to open if the message is missing
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * If found, the linked message; may be null
     *
     * @var Message|null
     */
    protected ?Message $message;

    /**
     * Timestamp from which the video/audio/video note/voice note playing must start, in seconds; 0 if not specified. The media can be in the message content or in its web page preview
     *
     * @var int
     */
    protected int $mediaTimestamp;

    /**
     * True, if the whole media album to which the message belongs is linked
     *
     * @var bool
     */
    protected bool $forAlbum;

    public function __construct(
        bool $isPublic,
        int $chatId,
        int $messageThreadId,
        ?Message $message,
        int $mediaTimestamp,
        bool $forAlbum,
    ) {
        $this->isPublic = $isPublic;
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->message = $message;
        $this->mediaTimestamp = $mediaTimestamp;
        $this->forAlbum = $forAlbum;
    }

    public static function fromArray(array $array): MessageLinkInfo
    {
        return new static(
            $array['is_public'],
            $array['chat_id'],
            $array['message_thread_id'],
            (isset($array['message']) ? TdSchemaRegistry::fromArray($array['message']) : null),
            $array['media_timestamp'],
            $array['for_album'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_public' => $this->isPublic,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'message' => (isset($this->message) ? $this->message : null),
            'media_timestamp' => $this->mediaTimestamp,
            'for_album' => $this->forAlbum,
        ];
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }
}
