<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns reactions added for a message, along with their sender
 */
class GetMessageAddedReactions extends TdFunction
{
    public const TYPE_NAME = 'getMessageAddedReactions';

    /**
     * Identifier of the chat to which the message belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Type of the reactions to return; pass null to return all added reactions
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * The maximum number of reactions to be returned; must be positive and can't be greater than 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, int $messageId, ReactionType $reactionType, string $offset, int $limit)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->reactionType = $reactionType;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetMessageAddedReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'reaction_type' => $this->reactionType->typeSerialize(),
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
