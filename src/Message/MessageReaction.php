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
    public const TYPE_NAME = 'messageReaction';

    public function __construct(
        /**
         * Type of the reaction.
         */
        protected ReactionType   $type,
        /**
         * Number of times the reaction was added.
         */
        protected int            $totalCount,
        /**
         * True, if the reaction is chosen by the current user.
         */
        protected bool           $isChosen,
        /**
         * Identifier of the message sender used by the current user to add the reaction; may be null if unknown or the reaction isn't chosen.
         */
        protected ?MessageSender $usedSenderId,
        /**
         * Identifiers of at most 3 recent message senders, added the reaction; available in private, basic group and supergroup chats.
         *
         * @var MessageSender[]
         */
        protected array          $recentSenderIds,
    ) {}

    public static function fromArray(array $array): MessageReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['total_count'],
            $array['is_chosen'],
            isset($array['used_sender_id']) ? TdSchemaRegistry::fromArray($array['used_sender_id']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_sender_ids']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'type'           => $this->type->typeSerialize(),
            'total_count'    => $this->totalCount,
            'is_chosen'      => $this->isChosen,
            'used_sender_id' => $this->usedSenderId ?? null,
            array_map(static fn($x) => $x->typeSerialize(), $this->recentSenderIds),
        ];
    }
}
