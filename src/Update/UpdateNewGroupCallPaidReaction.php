<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new paid reaction was received in a live story group call.
 */
class UpdateNewGroupCallPaidReaction extends Update
{
    public const string TYPE_NAME = 'updateNewGroupCallPaidReaction';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int           $groupCallId,
        /**
         * Identifier of the sender of the reaction.
         */
        protected MessageSender $senderId,
        /**
         * The number of Telegram Stars that were paid to send the reaction.
         */
        protected int           $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewGroupCallPaidReaction
    {
        return new static(
            groupCallId: $array['group_call_id'],
            senderId   : TdSchemaRegistry::fromArray($array['sender_id']),
            starCount  : $array['star_count'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'sender_id'     => $this->senderId->jsonSerialize(),
            'star_count'    => $this->starCount,
        ];
    }
}
