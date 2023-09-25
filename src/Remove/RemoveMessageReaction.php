<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a reaction from a message. A chosen reaction can always be removed
 */
class RemoveMessageReaction extends TdFunction
{
    public const TYPE_NAME = 'removeMessageReaction';

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
     * Type of the reaction to remove
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    public function __construct(int $chatId, int $messageId, ReactionType $reactionType)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->reactionType = $reactionType;
    }

    public static function fromArray(array $array): RemoveMessageReaction
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'reaction_type' => $this->reactionType->typeSerialize(),
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
}
