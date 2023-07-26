<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Adds a reaction to a message. Use getMessageAvailableReactions to receive the list of available reactions for the message
 */
class AddMessageReaction extends TdFunction
{
    public const TYPE_NAME = 'addMessageReaction';

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
     * Type of the reaction to add
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    /**
     * Pass true if the reaction is added with a big animation
     *
     * @var bool
     */
    protected bool $isBig;

    /**
     * Pass true if the reaction needs to be added to recent reactions
     *
     * @var bool
     */
    protected bool $updateRecentReactions;

    public function __construct(
        int $chatId,
        int $messageId,
        ReactionType $reactionType,
        bool $isBig,
        bool $updateRecentReactions
    ) {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->reactionType = $reactionType;
        $this->isBig = $isBig;
        $this->updateRecentReactions = $updateRecentReactions;
    }

    public static function fromArray(array $array): AddMessageReaction
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['is_big'],
            $array['update_recent_reactions'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'reaction_type' => $this->reactionType->typeSerialize(),
            'is_big' => $this->isBig,
            'update_recent_reactions' => $this->updateRecentReactions,
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

    public function getIsBig(): bool
    {
        return $this->isBig;
    }

    public function getUpdateRecentReactions(): bool
    {
        return $this->updateRecentReactions;
    }
}
