<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of revenue transactions for a chat. Currently, this method can be used only for channels if supergroupFullInfo.can_get_revenue_statistics
 * == true or bots if userFullInfo.bot_info.can_get_revenue_statistics == true.
 */
class GetChatRevenueTransactions extends TdFunction
{
    public const TYPE_NAME = 'getChatRevenueTransactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Number of transactions to skip.
         */
        protected int $offset,
        /**
         * The maximum number of transactions to be returned; up to 200.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): GetChatRevenueTransactions
    {
        return new static(
            $array['chat_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'offset'  => $this->offset,
            'limit'   => $this->limit,
        ];
    }
}
