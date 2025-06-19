<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Paid\PaidReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds the paid message reaction to a message. Use getMessageAvailableReactions to check whether the reaction is available for the message.
 */
class AddPendingPaidMessageReaction extends TdFunction
{
    public const TYPE_NAME = 'addPendingPaidMessageReaction';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int              $chatId,
        /**
         * Identifier of the message.
         */
        protected int              $messageId,
        /**
         * Number of Telegram Stars to be used for the reaction. The total number of pending paid reactions must not exceed getOption("paid_reaction_star_count_max").
         */
        protected int              $starCount,
        /**
         * Type of the paid reaction; pass null if the user didn't choose reaction type explicitly, for example, the reaction is set from the message bubble.
         */
        protected PaidReactionType $type
    ) {}

    public static function fromArray(array $array): AddPendingPaidMessageReaction
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['star_count'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getType(): PaidReactionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'star_count' => $this->starCount,
            'type'       => $this->type->typeSerialize(),
        ];
    }
}
