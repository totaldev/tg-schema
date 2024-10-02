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
    public const TYPE_NAME = 'quickReplyMessage';

    public function __construct(
        /**
         * Unique message identifier among all quick replies.
         */
        protected int                  $id,
        /**
         * The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent.
         */
        protected ?MessageSendingState $sendingState,
        /**
         * True, if the message can be edited.
         */
        protected bool                 $canBeEdited,
        /**
         * The identifier of the quick reply message to which the message replies; 0 if none.
         */
        protected int                  $replyToMessageId,
        /**
         * If non-zero, the user identifier of the bot through which this message was sent.
         */
        protected int                  $viaBotUserId,
        /**
         * Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums.
         */
        protected int                  $mediaAlbumId,
        /**
         * Content of the message.
         */
        protected MessageContent       $content,
        /**
         * Inline keyboard reply markup for the message; may be null if none.
         */
        protected ?ReplyMarkup         $replyMarkup,
    ) {}

    public static function fromArray(array $array): QuickReplyMessage
    {
        return new static(
            $array['id'],
            isset($array['sending_state']) ? TdSchemaRegistry::fromArray($array['sending_state']) : null,
            $array['can_be_edited'],
            $array['reply_to_message_id'],
            $array['via_bot_user_id'],
            $array['media_album_id'],
            TdSchemaRegistry::fromArray($array['content']),
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'id'                  => $this->id,
            'sending_state'       => (isset($this->sendingState) ? $this->sendingState : null),
            'can_be_edited'       => $this->canBeEdited,
            'reply_to_message_id' => $this->replyToMessageId,
            'via_bot_user_id'     => $this->viaBotUserId,
            'media_album_id'      => $this->mediaAlbumId,
            'content'             => $this->content->typeSerialize(),
            'reply_markup'        => (isset($this->replyMarkup) ? $this->replyMarkup : null),
        ];
    }
}
