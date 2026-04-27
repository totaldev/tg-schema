<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Quick;

use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\Message\MessageSendingState;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a message that can be used for quick reply.
 */
class QuickReplyMessage extends TdObject
{
    public const string TYPE_NAME = 'quickReplyMessage';

    public function __construct(
        /**
         * True, if the message can be edited.
         */
        protected bool                 $canBeEdited,
        /**
         * Content of the message.
         */
        protected MessageContent       $content,
        /**
         * Unique message identifier among all quick replies.
         */
        protected int                  $id,
        /**
         * Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums.
         */
        protected int                  $mediaAlbumId,
        /**
         * Inline keyboard reply markup for the message; may be null if none.
         */
        protected ?ReplyMarkup         $replyMarkup,
        /**
         * The identifier of the quick reply message to which the message replies; 0 if none.
         */
        protected int                  $replyToMessageId,
        /**
         * The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent.
         */
        protected ?MessageSendingState $sendingState,
        /**
         * If non-zero, the user identifier of the bot through which this message was sent.
         */
        protected int                  $viaBotUserId,
    ) {}

    public static function fromArray(array $array): QuickReplyMessage
    {
        return new static(
            canBeEdited     : $array['can_be_edited'],
            content         : TdSchemaRegistry::fromArray($array['content']),
            id              : $array['id'],
            mediaAlbumId    : $array['media_album_id'],
            replyMarkup     : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            replyToMessageId: $array['reply_to_message_id'],
            sendingState    : (isset($array['sending_state']) ? TdSchemaRegistry::fromArray($array['sending_state']) : null),
            viaBotUserId    : $array['via_bot_user_id'],
        );
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getSendingState(): ?MessageSendingState
    {
        return $this->sendingState;
    }

    public function getViaBotUserId(): int
    {
        return $this->viaBotUserId;
    }

    public function setCanBeEdited(bool $value): static
    {
        $this->canBeEdited = $value;

        return $this;
    }

    public function setContent(MessageContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMediaAlbumId(int $value): static
    {
        $this->mediaAlbumId = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setReplyToMessageId(int $value): static
    {
        $this->replyToMessageId = $value;

        return $this;
    }

    public function setSendingState(?MessageSendingState $value): static
    {
        $this->sendingState = $value;

        return $this;
    }

    public function setViaBotUserId(int $value): static
    {
        $this->viaBotUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'can_be_edited'       => $this->canBeEdited,
            'content'             => $this->content->jsonSerialize(),
            'id'                  => $this->id,
            'media_album_id'      => $this->mediaAlbumId,
            'reply_markup'        => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'reply_to_message_id' => $this->replyToMessageId,
            'sending_state'       => (null !== $this->sendingState ? $this->sendingState->jsonSerialize() : null),
            'via_bot_user_id'     => $this->viaBotUserId,
        ];
    }
}
