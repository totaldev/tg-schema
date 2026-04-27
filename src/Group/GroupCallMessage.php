<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a message sent in a group call.
 */
class GroupCallMessage extends TdObject
{
    public const string TYPE_NAME = 'groupCallMessage';

    public function __construct(
        /**
         * True, if the message can be deleted by the current user; for live stories only.
         */
        protected bool          $canBeDeleted,
        /**
         * Point in time (Unix timestamp) when the message was sent.
         */
        protected int           $date,
        /**
         * True, if the message is sent by the owner of the call and must be treated as a message of the maximum level; for live stories only.
         */
        protected bool          $isFromOwner,
        /**
         * Unique message identifier within the group call.
         */
        protected int           $messageId,
        /**
         * The number of Telegram Stars that were paid to send the message; for live stories only.
         */
        protected int           $paidMessageStarCount,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender $senderId,
        /**
         * Text of the message. If empty, then the message is a paid reaction in a live story.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): GroupCallMessage
    {
        return new static(
            canBeDeleted        : $array['can_be_deleted'],
            date                : $array['date'],
            isFromOwner         : $array['is_from_owner'],
            messageId           : $array['message_id'],
            paidMessageStarCount: $array['paid_message_star_count'],
            senderId            : TdSchemaRegistry::fromArray($array['sender_id']),
            text                : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getCanBeDeleted(): bool
    {
        return $this->canBeDeleted;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsFromOwner(): bool
    {
        return $this->isFromOwner;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setCanBeDeleted(bool $value): static
    {
        $this->canBeDeleted = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setIsFromOwner(bool $value): static
    {
        $this->isFromOwner = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'can_be_deleted'          => $this->canBeDeleted,
            'date'                    => $this->date,
            'is_from_owner'           => $this->isFromOwner,
            'message_id'              => $this->messageId,
            'paid_message_star_count' => $this->paidMessageStarCount,
            'sender_id'               => $this->senderId->jsonSerialize(),
            'text'                    => $this->text->jsonSerialize(),
        ];
    }
}
