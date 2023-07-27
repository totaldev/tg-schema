<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a reaction to a message
 */
class MessageReaction extends TdObject
{
    public const TYPE_NAME = 'messageReaction';

    /**
     * Type of the reaction
     *
     * @var ReactionType
     */
    protected ReactionType $type;

    /**
     * Number of times the reaction was added
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * True, if the reaction is chosen by the current user
     *
     * @var bool
     */
    protected bool $isChosen;

    /**
     * Identifiers of at most 3 recent message senders, added the reaction; available in private, basic group and supergroup chats
     *
     * @var MessageSender[]
     */
    protected array $recentSenderIds;

    public function __construct(ReactionType $type, int $totalCount, bool $isChosen, array $recentSenderIds)
    {
        $this->type = $type;
        $this->totalCount = $totalCount;
        $this->isChosen = $isChosen;
        $this->recentSenderIds = $recentSenderIds;
    }

    public static function fromArray(array $array): MessageReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['total_count'],
            $array['is_chosen'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['recentSenderIds']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'total_count' => $this->totalCount,
            'is_chosen' => $this->isChosen,
            array_map(fn($x) => $x->typeSerialize(), $this->recentSenderIds),
        ];
    }

    public function getType(): ReactionType
    {
        return $this->type;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    public function getRecentSenderIds(): array
    {
        return $this->recentSenderIds;
    }
}
