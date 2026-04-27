<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a reaction to a message.
 */
class MessageReaction extends TdObject
{
    public const string TYPE_NAME = 'messageReaction';

    public function __construct(
        /**
         * True, if the reaction is chosen by the current user.
         */
        protected bool           $isChosen,
        /**
         * Identifiers of at most 3 recent message senders, added the reaction; available in private, basic group and supergroup chats.
         *
         * @var MessageSender[]
         */
        protected array          $recentSenderIds,
        /**
         * Number of times the reaction was added.
         */
        protected int            $totalCount,
        /**
         * Type of the reaction.
         */
        protected ReactionType   $type,
        /**
         * Identifier of the message sender used by the current user to add the reaction; may be null if unknown or the reaction isn't chosen.
         */
        protected ?MessageSender $usedSenderId,
    ) {}

    public static function fromArray(array $array): MessageReaction
    {
        return new static(
            isChosen       : $array['is_chosen'],
            recentSenderIds: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_sender_ids']),
            totalCount     : $array['total_count'],
            type           : TdSchemaRegistry::fromArray($array['type']),
            usedSenderId   : (isset($array['used_sender_id']) ? TdSchemaRegistry::fromArray($array['used_sender_id']) : null),
        );
    }

    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    public function getRecentSenderIds(): array
    {
        return $this->recentSenderIds;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getType(): ReactionType
    {
        return $this->type;
    }

    public function getUsedSenderId(): ?MessageSender
    {
        return $this->usedSenderId;
    }

    public function setIsChosen(bool $value): static
    {
        $this->isChosen = $value;

        return $this;
    }

    public function setRecentSenderIds(array $value): static
    {
        $this->recentSenderIds = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function setType(ReactionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function setUsedSenderId(?MessageSender $value): static
    {
        $this->usedSenderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'is_chosen'         => $this->isChosen,
            'recent_sender_ids' => array_map(static fn($x) => $x->jsonSerialize(), $this->recentSenderIds),
            'total_count'       => $this->totalCount,
            'type'              => $this->type->jsonSerialize(),
            'used_sender_id'    => (null !== $this->usedSenderId ? $this->usedSenderId->jsonSerialize() : null),
        ];
    }
}
