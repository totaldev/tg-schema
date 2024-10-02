<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of boosts applied to a chat; requires administrator rights in the chat.
 */
class GetChatBoosts extends TdFunction
{
    public const TYPE_NAME = 'getChatBoosts';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int    $chatId,
        /**
         * Pass true to receive only boosts received from gift codes and giveaways created by the chat.
         */
        protected bool   $onlyGiftCodes,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of boosts to be returned; up to 100. For optimal performance, the number of returned boosts can be smaller than the specified limit.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): GetChatBoosts
    {
        return new static(
            $array['chat_id'],
            $array['only_gift_codes'],
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

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOnlyGiftCodes(): bool
    {
        return $this->onlyGiftCodes;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'only_gift_codes' => $this->onlyGiftCodes,
            'offset'          => $this->offset,
            'limit'           => $this->limit,
        ];
    }
}
