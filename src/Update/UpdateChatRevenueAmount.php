<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatRevenueAmount;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The revenue earned from sponsored messages in a chat has changed. If chat revenue screen is opened, then getChatRevenueTransactions may be called to fetch
 * new transactions.
 */
class UpdateChatRevenueAmount extends Update
{
    public const TYPE_NAME = 'updateChatRevenueAmount';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int               $chatId,
        /**
         * New amount of earned revenue.
         */
        protected ChatRevenueAmount $revenueAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatRevenueAmount
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['revenue_amount']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRevenueAmount(): ChatRevenueAmount
    {
        return $this->revenueAmount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'revenue_amount' => $this->revenueAmount->typeSerialize(),
        ];
    }
}
