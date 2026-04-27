<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a link to a message or a forum topic in a chat.
 */
class MessageLinkInfo extends TdObject
{
    public const string TYPE_NAME = 'messageLinkInfo';

    public function __construct(
        /**
         * If found, identifier of the chat to which the link points, 0 otherwise.
         */
        protected int           $chatId,
        /**
         * True, if the whole media album to which the message belongs is linked.
         */
        protected bool          $forAlbum,
        /**
         * True, if the link is a public link for a message or a forum topic in a chat.
         */
        protected bool          $isPublic,
        /**
         * Timestamp from which the video/audio/video note/voice note/story playing must start, in seconds; 0 if not specified. The media can be in the message content or in its link preview.
         */
        protected int           $mediaTimestamp,
        /**
         * If found, the linked message; may be null.
         */
        protected ?Message      $message,
        /**
         * Identifier of the specific topic in which the message must be opened, or a topic to open if the message is missing; may be null if none.
         */
        protected ?MessageTopic $topicId,
    ) {}

    public static function fromArray(array $array): MessageLinkInfo
    {
        return new static(
            chatId        : $array['chat_id'],
            forAlbum      : $array['for_album'],
            isPublic      : $array['is_public'],
            mediaTimestamp: $array['media_timestamp'],
            message       : (isset($array['message']) ? TdSchemaRegistry::fromArray($array['message']) : null),
            topicId       : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
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

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
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

    public function setIsPublic(bool $value): static
    {
        $this->isPublic = $value;

        return $this;
    }

    public function setMediaTimestamp(int $value): static
    {
        $this->mediaTimestamp = $value;

        return $this;
    }

    public function setMessage(?Message $value): static
    {
        $this->message = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'for_album'       => $this->forAlbum,
            'is_public'       => $this->isPublic,
            'media_timestamp' => $this->mediaTimestamp,
            'message'         => (null !== $this->message ? $this->message->jsonSerialize() : null),
            'topic_id'        => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
