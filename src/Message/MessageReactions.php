<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Paid\PaidReactor;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of reactions added to a message.
 */
class MessageReactions extends TdObject
{
    public const string TYPE_NAME = 'messageReactions';

    public function __construct(
        /**
         * True, if the reactions are tags and Telegram Premium users can filter messages by them.
         */
        protected bool  $areTags,
        /**
         * True, if the list of added reactions is available using getMessageAddedReactions.
         */
        protected bool  $canGetAddedReactions,
        /**
         * Information about top users that added the paid reaction.
         *
         * @var PaidReactor[]
         */
        protected array $paidReactors,
        /**
         * List of added reactions.
         *
         * @var MessageReaction[]
         */
        protected array $reactions,
    ) {}

    public static function fromArray(array $array): MessageReactions
    {
        return new static(
            areTags             : $array['are_tags'],
            canGetAddedReactions: $array['can_get_added_reactions'],
            paidReactors        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['paid_reactors']),
            reactions           : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
        );
    }

    public function getAreTags(): bool
    {
        return $this->areTags;
    }

    public function getCanGetAddedReactions(): bool
    {
        return $this->canGetAddedReactions;
    }

    public function getPaidReactors(): array
    {
        return $this->paidReactors;
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }

    public function setAreTags(bool $value): static
    {
        $this->areTags = $value;

        return $this;
    }

    public function setCanGetAddedReactions(bool $value): static
    {
        $this->canGetAddedReactions = $value;

        return $this;
    }

    public function setPaidReactors(array $value): static
    {
        $this->paidReactors = $value;

        return $this;
    }

    public function setReactions(array $value): static
    {
        $this->reactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'are_tags'                => $this->areTags,
            'can_get_added_reactions' => $this->canGetAddedReactions,
            'paid_reactors'           => array_map(static fn($x) => $x->jsonSerialize(), $this->paidReactors),
            'reactions'               => array_map(static fn($x) => $x->jsonSerialize(), $this->reactions),
        ];
    }
}
