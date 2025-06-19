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
    public const TYPE_NAME = 'messageReactions';

    public function __construct(
        /**
         * List of added reactions.
         *
         * @var MessageReaction[]
         */
        protected array $reactions,
        /**
         * True, if the reactions are tags and Telegram Premium users can filter messages by them.
         */
        protected bool  $areTags,
        /**
         * Information about top users that added the paid reaction.
         *
         * @var PaidReactor[]
         */
        protected array $paidReactors,
        /**
         * True, if the list of added reactions is available using getMessageAddedReactions.
         */
        protected bool  $canGetAddedReactions
    ) {}

    public static function fromArray(array $array): MessageReactions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
            $array['are_tags'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['paid_reactors']),
            $array['can_get_added_reactions'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->reactions),
            'are_tags'                => $this->areTags,
            array_map(fn($x) => $x->typeSerialize(), $this->paidReactors),
            'can_get_added_reactions' => $this->canGetAddedReactions,
        ];
    }
}
