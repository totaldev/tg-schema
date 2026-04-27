<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the original details about the gift.
 */
class UpgradedGiftOriginalDetails extends TdObject
{
    public const string TYPE_NAME = 'upgradedGiftOriginalDetails';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the gift was sent.
         */
        protected int            $date,
        /**
         * Identifier of the user or the chat that received the gift.
         */
        protected MessageSender  $receiverId,
        /**
         * Identifier of the user or the chat that sent the gift; may be null if the gift was private.
         */
        protected ?MessageSender $senderId,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
    ) {}

    public static function fromArray(array $array): UpgradedGiftOriginalDetails
    {
        return new static(
            date      : $array['date'],
            receiverId: TdSchemaRegistry::fromArray($array['receiver_id']),
            senderId  : (isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null),
            text      : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getReceiverId(): MessageSender
    {
        return $this->receiverId;
    }

    public function getSenderId(): ?MessageSender
    {
        return $this->senderId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setReceiverId(MessageSender $value): static
    {
        $this->receiverId = $value;

        return $this;
    }

    public function setSenderId(?MessageSender $value): static
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
            '@type'       => static::TYPE_NAME,
            'date'        => $this->date,
            'receiver_id' => $this->receiverId->jsonSerialize(),
            'sender_id'   => (null !== $this->senderId ? $this->senderId->jsonSerialize() : null),
            'text'        => $this->text->jsonSerialize(),
        ];
    }
}
