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
    public const TYPE_NAME = 'upgradedGiftOriginalDetails';

    public function __construct(
        /**
         * Identifier of the user or the chat that sent the gift; may be null if the gift was private.
         */
        protected ?MessageSender $senderId,
        /**
         * Identifier of the user or the chat that received the gift.
         */
        protected MessageSender  $receiverId,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
        /**
         * Point in time (Unix timestamp) when the gift was sent.
         */
        protected int            $date
    ) {}

    public static function fromArray(array $array): UpgradedGiftOriginalDetails
    {
        return new static(
            isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null,
            TdSchemaRegistry::fromArray($array['receiver_id']),
            TdSchemaRegistry::fromArray($array['text']),
            $array['date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sender_id'   => $this->senderId ?? null,
            'receiver_id' => $this->receiverId->typeSerialize(),
            'text'        => $this->text->typeSerialize(),
            'date'        => $this->date,
        ];
    }
}
